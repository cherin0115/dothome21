<?php
    $host = "localhost"; 
    $user = "cherin0115";
    $pass = "Soakdma89!"; 
    $db = "cherin0115";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        //echo "Database Connect True";
    }
?>