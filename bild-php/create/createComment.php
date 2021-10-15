<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myComment (";
    $sql .= "myCommentID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youText varchar(50) NOT NULL,";
    $sql .= "regTime int(15) NOT NULL,";
    $sql .= "PRIMARY KEY (myCommentID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if( $result ){
        echo "Create Comment Ture";
    } else {
        echo "Create Comment false";
    }
?>