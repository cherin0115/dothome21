<?php
    if( !isset($_SESSION['myMemberID']) ){
        Header("Location: ../login/login.php");
    }
?>