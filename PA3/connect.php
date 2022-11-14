<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if ( !$conn ){
        die("Can't connect to database: " . mysqli_connect_error());
    }
?>