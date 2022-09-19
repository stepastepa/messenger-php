<?php
    include("configs/dbconnect.php");
    $sql = "SELECT * FROM users";
    $selectionResult = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" class="night">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div class="app">


        <section class="menu">
            <div class="menu-container">
                <ul class="icons-container">
                    <li class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-logo"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="7.5 4.21 12 6.81 16.5 4.21"/><polyline points="7.5 19.79 7.5 14.6 3 12"/><polyline points="21 12 16.5 14.6 16.5 19.79"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                    </li>
                    <li class="menu-icon active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    </li>
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </li>
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </li>
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                    </li>
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                    </li>
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </li>
                    <a class="menu-icon" href="https://github.com/stepastepa">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-plus-circle"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                    </li>
                </ul>
                <ul class="icons-container">
                    <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                        <span class="menu-icon-label">18</span>
                    </li>
                    <li class="menu-icon toggle-theme" id="toggleTheme">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </li>
                    <!-- <li class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#ffffff" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-settings"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                    </li> -->
                    <li class="menu-icon" id="maximizeButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-minimize hide"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path></svg>
                    </li>
                    <li class="avatar">
                        <img src="images/avatars/user-2.jpeg" alt="">
                    </li>
                </ul>
            </div>
        </section>








        <section class="list-section hide">
            <section class="list">
                <div class="top-container">
                    <div class="search-container">
                        <div class="input-search-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-search"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        
                            <input type="search" placeholder="Search">
                        </div>
                    </div>
                    <div class="gradient-top"></div>
                </div>


                <div class="group-container favourites">
                    <div class="group-header">
                        <span class="group-header-name">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-arrow"><polyline points="6 9 12 15 18 9"/></svg>
                            Favorites <span class="group-quantity">(<?php

                                $favoriteArray = [];
                                $x = 0;
                                foreach ($selectionResult as $item) {
                                    if ($item['favorite'] == 1) {
                                        $favoriteArray[$x] = $item;
                                        $x++;
                                    }
                                }
                                $favoriteQuantity = count($favoriteArray);
                                echo $favoriteQuantity;

                            ?>)</span>
                        </span>
                        <span class="list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-more"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
                        </span>
                    </div>

                    <ul class="group-list-row-container">

                        <?php 
                            foreach ($selectionResult as $item) {
                                if ($item['favorite'] == 1) {
                                    include("parts/add-users.php");
                                }
                            }
                        ?>

                    </ul>
                </div>


                <div class="group-container teams">
                    <div class="group-header">
                        <span class="group-header-name">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-arrow"><polyline points="6 9 12 15 18 9"/></svg>
                            Teams <span class="group-quantity">(<?php

                                $teamArray = [];
                                $y = 0;
                                foreach ($selectionResult as $item) {
                                    if ($item['group'] == 1) {
                                        $teamArray[$y] = $item;
                                        $y++;
                                    }
                                }
                                $teamQuantity = count($teamArray);
                                echo $teamQuantity;

                            ?>)</span>
                        </span>
                        <span class="list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-more"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
                        </span>
                    </div>
                    
                    <ul class="group-list-row-container">

                        <?php 
                            foreach ($selectionResult as $item) {
                                if ($item['group'] == 1) {
                                    include("parts/add-users.php");
                                }
                            }
                        ?>

                    </ul>
                </div>


                <div class="group-container direct">
                    <div class="group-header">
                        <span class="group-header-name">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-arrow"><polyline points="6 9 12 15 18 9"/></svg>
                            Direct <span class="group-quantity">(<?php

                                $userArray = [];
                                $a = 0;
                                foreach ($selectionResult as $item) {
                                    if ($item['group'] == 0) {
                                        $userArray[$a] = $item;
                                        $a++;
                                    }
                                }
                                $userQuantity = count($userArray);
                                echo $userQuantity;

                            ?>)</span>
                        </span>
                        <span class="list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-more"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
                        </span>
                    </div>
                    
                    <ul class="group-list-row-container">
                        
                        <?php 
                            foreach ($selectionResult as $item) {
                                if ($item['group'] == 0) {
                                    include("parts/add-users.php");
                                }
                            }
                        ?>
                    </ul>
                </div>
                

                <div class="gradient-bottom"></div>
            </section>
            <div id="resizeAreaList" class="resizeArea hold"></div>
        </section>
        










        <section class="chat">

            <div class="chat-header-container">
                <div class="chat-header">

                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-list">
                        <polyline points="18 17 13 12 18 7"></polyline>
                        <polyline points="11 17 6 12 11 7"></polyline>
                    </svg>


                    <div class="chat-header-name-container">
                        <span class="chat-header-name">Design Team</span>
                        <div class="chat-header-options">
                            <span>

                                <?php 
                                    $designArray = [];
                                    $i = 0;
                                    foreach ($selectionResult as $item) {
                                        if ($item['team'] == "Design" && $item['group'] == 0) {
                                            $designArray[$i] = $item;
                                            $i++;
                                        }
                                    }
                                    $membersQuantity = count($designArray);
                                    echo $membersQuantity;
                                ?>

                                members
                            </span>
                            <div class="chat-header-add-member">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-plus"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                <span>Add members</span>
                            </div>
                        </div>
                    </div>
                    

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-bookmark active"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="#fff" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-settings"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-more"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </div>
                <div class="gradient-top"></div>
            </div>

            






            <ol class="chat-messages-container">

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-10.jpeg" alt="">
                        <span class="hide">ZL</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Zaria Lesly</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Lorem ipsum, dolor sit amet consectetur.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row sent">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-2.jpeg" alt="">
                        <span class="hide">SD</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">You</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Ipsum, aamet consectetur so.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Allo nisi provident nostrum.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Ea qui nam porro repellat animi. Quos, nesciunt dolorem inventore at autem laborum fugiat, eaque totam ipsa facere asperiores maiores iste, nihil dolores magni labore porro quae.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Porro repellat.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row sent">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-2.jpeg" alt="">
                        <span class="hide">SD</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">You</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Amet consectetur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil itaque officiis.
                        </div>
                    </div>
                </li>
                <li class="chat-message-row sent">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-2.jpeg" alt="">
                        <span class="hide">SD</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">You</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Distinctio perspiciatis consequuntur animo? Doloribus laudantium architecto eligendi placeat, natus harum saepe?
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-10.jpeg" alt="">
                        <span class="hide">ZL</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Zaria Lesly</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Etea nesciunt illum pore lode.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Nam animi repellat.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row sent">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-2.jpeg" alt="">
                        <span class="hide">SD</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">You</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Dolor sit amet consectetur.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Nam porro repellat ani adipisci?
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Qui nam porro repellat.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Ea qui nam porro animi repellat.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Ratione topo pasto.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row sent">
                    <div class="list-avatar belizehole">
                        <img src="images/avatars/user-2.jpeg" alt="">
                        <span class="hide">SD</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">You</span>
                            <span class="message-date">14:44</span>
                        </div>
                        <div class="message-text">
                            Lorem ipsum, dolor sit amet consectetur elit po.
                        </div>
                    </div>
                </li>

                <li class="chat-message-row">
                    <div class="list-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>MH</span>
                    </div>
                    <div class="message-container">
                        <div class="message-name-container">
                            <span class="message-name">Matleena Hopcyn</span>
                            <span class="message-date">14:45</span>
                        </div>
                        <div class="message-text">
                            Ea qui nam porro repellat yo.
                        </div>
                    </div>
                </li>

            </ol>

            
            




            <div class="chat-input-container">
                <div class="gradient-bottom"></div>
                <div class="chat-input-bg">
                    <div class="chat-input">
                        <!-- <input type="text" placeholder="Type your message here"> -->
                        <div class="input" contenteditable="true">It is a suggestion for what kind of input will be valid, and is not actual input of any kind...
                        </div>
                        <div class="chat-input-icons-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>


                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chat-icon-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>








        <section class="info-section hide">
            <div id="resizeAreaInfo" class="resizeArea"></div>
            <section class="info">
                <div class="info-header-container">
                    <div class="info-header">
                        <span>Group info</span>
                        <div class="info-header-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-close"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                        </div>
                    </div>
                    <div class="gradient-top"></div> 
                </div>
                


                <div class="info-avatar-container">
                    <div class="info-avatar belizehole">
                        <!-- <img src="" alt=""> -->
                        <span>DT</span>
                    </div>
                    <span class="info-avatar-name">Design Team</span>
                    <span class="info-avatar-label">last active 14:45</span>
                </div>


                <div class="info-list-container info-members">
                    <div class="info-list-header">
                        <span class="info-list-header-name">
                            Group members <span class="info-list-quantity">

                                <?php
                                    echo $membersQuantity;
                                ?>

                            </span>
                        </span>
                        <span class="info-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-arrow"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </div>

                    <ul class="info-list-row-container">

                        <?php 
                            foreach ($selectionResult as $item) {
                                if ($item['team'] == "Design" && $item['group'] == 0) {
                                    if($item['job'] == "Team Lead") {
                                        include("parts/add-members.php");
                                    }
                                }
                            }
                            foreach ($selectionResult as $item) {
                                if ($item['team'] == "Design" && $item['group'] == 0) {
                                    if($item['job'] == "Senior") {
                                        include("parts/add-members.php");
                                    }
                                }
                            }
                            foreach ($selectionResult as $item) {
                                if ($item['team'] == "Design" && $item['group'] == 0) {
                                    if($item['job'] == null) {
                                        include("parts/add-members.php");
                                    }
                                }
                            }
                            foreach ($selectionResult as $item) {
                                if ($item['team'] == "Design" && $item['group'] == 0) {
                                    if($item['job'] == "Intern") {
                                        include("parts/add-members.php");
                                    }
                                }
                            }
                        ?>

                    </ul>
                </div>


                <div class="info-list-container info-files">
                    <div class="info-list-header closed">
                        <span class="info-list-header-name">
                            Photos and Files <span class="info-list-quantity">1256</span>
                        </span>
                        <span class="info-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-arrow"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </div>

                    <ul class="info-list-row-container">
                        <li class="info-files-box">
                            <img src="images/projects/photo2.jpg" alt="">
                        </li>
                        <li class="info-files-box">
                            <img src="images/projects/photo1.jpg" alt="">
                        </li>
                        <li class="info-files-box">
                            <img src="images/projects/photo5.jpg" alt="">
                        </li>
                        <li class="info-files-box">
                            <span>1253</span>
                        </li>
                    </ul>
                </div>
                

                <div class="info-list-container info-tasks">
                    <div class="info-list-header closed">
                        <span class="info-list-header-name">
                            Tasks <span class="info-list-quantity">14</span>
                        </span>
                        <span class="info-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-arrow"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </div>

                    <ul class="info-list-row-container">
                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark active"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Unde magnam libero similique illum</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check active"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Odit, minima ut</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Lorem, ipsum dolor</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check active"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Vitae totam tempora</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock active"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Doloremque veritatis</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark active"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Enim quasi quos</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark active"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Sit amet consectetur elit dignissimos</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock active"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Blanditiis nisi</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Libero tempore veritatis iste, necessitatibus!</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Elit fuga maxime accusantium</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark active"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Possimus beatae temporibus explicabo praesentium fugit!</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check active"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Mollitia nostrum!</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark active"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Nulla debitis est, soluta</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock active"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>


                        <li class="task-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>

                            <span>Repudiandae qui architecto?</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="info-icon-check"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </li>
                    </ul>
                </div>

                <div class="gradient-bottom"></div>
            </section>
        </section>


    </div>

    <script src="script.js"></script>
</body>
</html>