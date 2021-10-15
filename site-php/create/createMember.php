<?php
  include "../connect/connect.php";
  $sql = "CREATE TABLE myMember (";
  $sql .= "myMemberID int(10) unsigned NOT NULL auto_increment,";
  $sql .= "youEmail varchar(40) NOT NULL,";
  $sql .= "youPass varchar(20) NOT NULL,";
  $sql .= "youName varchar(20) NOT NULL,";
  $sql .= "youBirth varchar(11) NOT NULL,";
  $sql .= "youPhone varchar(14) NOT NULL,";
  $sql .= "regTime int(14) NOT NULL,";
  $sql .= "PRIMARY KEY (myMemberID)";
  $sql .= ")charset = utf8;";
  $result = $connect -> query($sql);
  if($result){
      echo "Create Table True";
  } else {
    //   echo "Create Table False";
  }
  // CREATE TABLE myMember (
  //     myMemberID int(10) unsigned NOT NULL auto_increment,
  //     youEmail varchar(40) NOT NULL,
  //     youPass varchar(20) NOT NULL,
  //     youName varchar(20) NOT NULL,
  //     youBirth varchar(11) NOT NULL,
  //     youPhone varchar(14) NOT NULL,
  //     regTime int(14) NOT NULL,
  //     PRIMARY KEY (myMemberID)
  // )charset = utf8;
?>