<?php
    include "../connect/connect.php";

    for( $i=1; $i<=100; $i++){
        $regTime = time();

        $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardContent, boardView, regTime) VALUES('1', '게시판 제목입니다.${i}', '게시글 ${i}번째 내용입니다. 내용입니다.', '1', '$regTime')";

        $result = $connect -> query($sql);

        if( $result ){
            echo "true";
        } else {
            echo "false";
        }
    }
?>