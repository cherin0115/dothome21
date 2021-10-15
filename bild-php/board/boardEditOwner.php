<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
                        <p>Q&A</p>
                        <h3>Edit comments</h3>
                        <div class="board-container">
                            <div class="board-wrap">
                                <form action="boardWriteSave.php" name="boardWrite" method="post">
                                    <fieldset>
                                            <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>
                                            <div class="wrap">
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
                                                <input type="text" id="boardTitle" name="boardTitle" class="answer" placeholder="답변을 수정해주세요." required autofocus>
                                            </div>
                                    </fieldset>
                                </form>
                            </div>
                        <button class="btn" type="submit" value="저장하기">수정하기</button>

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