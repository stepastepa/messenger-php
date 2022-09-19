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

$avatarImg = "";
$hideLettersOnAvatar = "";
if ($item['avatarlink'] != null) {
    $avatarImg = '<img src="'. $item['avatarlink'] .'" alt="">';
    $hideLettersOnAvatar = "hide";
}

$firstLetter = mb_substr($item['firstname'],0,1);
$secondLetter = mb_substr($item['lastname'],0,1);
$avatarLetters = $firstLetter . $secondLetter;

$hideLabel = "";
if ($item['newmessages'] == 0) {
    $hideLabel = "zero";
}

echo 
'<li class="group-row">
<div class="list-avatar '. $teamColor .'">
'. $avatarImg .'
<span class="'. $hideLettersOnAvatar .'">'. $avatarLetters .'</span>
</div>
<span class="list-name">'. $item['firstname'] .' '. $item['lastname'] .'</span>
<span class="list-label '. $hideLabel .'"><div>'. $item['newmessages'] .'</div></span>
</li>';

?>