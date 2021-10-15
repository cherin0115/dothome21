<?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youText = $_POST['youText'];
    $regTime = time();

    $sql = "INSERT INTO myComment (youName, youText, regTime) VALUES('$youName', '$youText', '$regTime')";

    $result = $connect -> query($sql);
?>

<script>
    location.href ="../comment/comment.php#comment";
</script>