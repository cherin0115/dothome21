<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header">  
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <div class="boardType">
                    <div class="board-container">
                        <div class="board-wrap">
                            <form action="boardModifySave.php" name="boardWrite" method="post">
                                <fieldset>
                                    <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>

                                    <?php
                                        $boardID = $_GET['boardID'];
                                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                        $result = $connect -> query($sql);
                                        
                                        if($result){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<div style='display:none'><div for='boardID'>번호</div><input type='text' name='boardID' id='boardID' value='".$_GET['boardID']."'></div>";
                                            echo "<div class='wrap'><div class='left'>제목</div><input class='right' type='text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
                                            echo "<div class='wrap'><div class='write'>내용</div><textarea class='right' name='boardContent' id='boardContent' rows='13'>".$info['boardContent']."</textarea></div>";
                                            echo "<div class='wrap'><div class='left'>비밀번호</div><input class='inputPass' type='password' name='boardPass' id='boardPass' placeholder='비밀번호를 입력해주세요.' autocomplete='off' required></div>";
                                        }
                                    ?>

                                        <!-- <div class="wrap">
                                            <div class="left">제목</div>
                                            <div class="right">포인트 유효기간은 언제까지 인가요?</div>
                                        </div>
                                        <div class="wrap">
                                            <div class="left">글쓴이</div>
                                            <div class="right">alsdk</div>
                                        </div>
                                        <div class="wrap">
                                            <div class="write">내용</div>
                                            <div class="right">포인트 유효기간은 언제까지 인가요?  언제까지 사용가능 한가요?</div>
                                        </div>
                                        <div class="wrap">
                                            <label class="left">답변</label>
                                            <div class="viewAnswer">포인트 유효기간은 적립일로부터 1년까지 사용가능합니다.사용기간이 만료된 포인트는 매월 말일 기준으로 자동 일괄 소멸됩니다.<br>
                                            다만, 이벤트 성으로 지급된 포인트의 경우 사용기간이 상이하므로 이용에  참고 부탁드립니다.<br>(기본 적립유효기간 예시) 적립일 : 2019년 11월 1일 / 소멸예정일 : 2020년 11월 30일</div>
                                        </div> -->
                                </fieldset>
                                <button class="save-btn" type="submit" value="저장하기">저장하기</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->
    <footer id="subFooter">
            <?php
                include "../include/subFooter.php";
            ?>
        </footer>
    <!-- //footer -->
</body>
</html>