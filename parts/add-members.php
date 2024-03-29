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

$hideJobLabel = "";
if ($item['job'] == null) {
    $hideJobLabel = "zero";
}

$userStatus = "";
if ($item['donotdisturb'] == 1) {
    $userStatus = "donotdisturb";
} else if ($item['online'] == 1) {
    $userStatus = "online";
}

// echo 
// '<li class="list-row">

// <div class="list-avatar '. $teamColor .'">

// '. $avatarImg .'

// <span class="'. $hideLettersOnAvatar .'">'. $avatarLetters .'</span>

// </div>

// <span class="list-name">'. $item['firstname'] .' '. $item['lastname'] .'</span>

// <div class="info-list-indicator '. $userStatus .'"></div>

// <span class="info-list-label '. $hideJobLabel .'">'. $item['job'] .'</span>

// </li>';

?>

<li class="list-row">
    <div class="list-avatar <?php echo $teamColor; ?>">
        <img class="<?php echo $hideImg; ?>" src="<?php echo $item['avatarlink']; ?>" alt="">
        <span class="<?php echo $hideLettersOnAvatar; ?>"><?php echo $avatarLetters; ?></span>
    </div>
    <span class="list-name"><?php echo $item['firstname'] . " " . $item['lastname']; ?></span>
    <div class="info-list-indicator <?php echo $userStatus; ?>"></div>
    <span class="info-list-label <?php echo $hideJobLabel; ?>"><?php echo $item['job']; ?></span>
</li>