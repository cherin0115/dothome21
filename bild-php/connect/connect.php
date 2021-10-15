<?php 
    $host = "localhost";
    $user = "bild";
    $pass = "qlfem21!";
    $db = "bild";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // if( mysqli_connect_errno() ){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }
?>