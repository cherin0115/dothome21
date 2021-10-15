<?php
    $host = "localhost";
    $user = "calidreams";
    $pass = "Soakdma89!";
    $db = "calidreams";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno() ){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>