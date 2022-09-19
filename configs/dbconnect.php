<?php 
    $servername = "localhost:8889";
    $database = "messenger";
    $username = "admin";
    $password = "stepanoid";
    // make connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Set the language encoding as utf-8
    mysqli_set_charset($conn, 'utf8');

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
    // mysqli_close($conn);
?>


