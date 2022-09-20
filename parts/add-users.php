<?php

$teamColor = "red";
if  ($item['team'] == "Design") {
    $teamColor = "belizehole";
} else if ($item['team'] == "Production") {
    $teamColor = "pomegranate";
} else if ($item['team'] == "Research") {
    $teamColor = "wisteria";
} else if ($item['team'] == "Marketing") {
    $teamColor = "greensea";
}

// $avatarImg = "";
$hideLettersOnAvatar = "";
$hideImg = "hide";
if ($item['avatarlink'] != null) {
    // $avatarImg = '<img src="'. $item['avatarlink'] .'" alt="">';
    $hideLettersOnAvatar = "hide";
    $hideImg = "";
}

$firstLetter = mb_substr($item['firstname'],0,1);
$secondLetter = mb_substr($item['lastname'],0,1);
$avatarLetters = $firstLetter . $secondLetter;

$hideLabel = "";
if ($item['newmessages'] == 0) {
    $hideLabel = "zero";
}

// echo 
// '<li class="group-row">

// <div class="list-avatar '. $teamColor .'">

// '. $avatarImg .'

// <span class="'. $hideLettersOnAvatar .'">'. $avatarLetters .'</span>

// </div>

// <span class="list-name">'. $item['firstname'] .' '. $item['lastname'] .'</span>

// <span class="list-label '. $hideLabel .'"><div>'. $item['newmessages'] .'</div></span>

// </li>';

?>

<li class="group-row">
    <div class="list-avatar <?php echo $teamColor; ?>">
        <img class="<?php echo $hideImg; ?>" src="<?php echo $item['avatarlink']; ?>" alt="">
        <span class="<?php echo $hideLettersOnAvatar; ?>"><?php echo $avatarLetters; ?></span>
    </div>
    <span class="list-name"><?php echo $item['firstname'] . " " . $item['lastname']; ?></span>
    <span class="list-label <?php echo $hideLabel; ?>"><div><?php echo $item['newmessages']; ?></div></span>
</li>