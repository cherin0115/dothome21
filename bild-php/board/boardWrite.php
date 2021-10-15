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
            <article class="container">
                <div class="boardType">
                    <div class="board">
                        <div class="tab-btn">
                            <ul>
                                <li class=""><a href="board.php">목록</a></li>
                                <li class="active"><a href="#">글쓰기</a></li>
                            </ul>
                        </div>
                        <div class="board-container">
                            <div class="board-write">
                                <form action="boardWriteSave.php" name="boardWrite" method="post">
                                    <fieldset>
                                        <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>
                                        <div class="boardWriteHead">
                                            <h3>1:1문의</h3>
                                            <p>※ 문의하신 사항은 성실하게 답변 드리겠습니다. 문의하시기 전에 Q&A를 참고 해주세요.</p>
                                        </div>
                                        <div class="boardWriteMain">
                                            <label for="boardTitle">Title</label>
                                            <input type="text" id="boardTitle" name="boardTitle" class="title-text" placeholder="제목을 입력해주세요." required autofocus>
                                        </div>
                                        <div class="boardWriteMain">
                                            <label for="boardContent">Content</label>
                                            <textarea name="boardContent" id="boardContent" rows="13" class="title-text" placeholder="내용을 작성해주세요." required></textarea>
                                        </div>
                                        <!-- <div class="boardWriteMain">
                                            <label for="boardPassword">Password</label>
                                            <input name="boardPassword" id="boardPassword" class="title-text" placeholder="비밀번호 8자리 이내로 입력해주세요." requiredn autofocus>
                                        </div> -->
                                    </fieldset>
                                    <div class="boardWriteBtn mt100">
                                        <button class="btn_submit3" type="submit" value="취소하기"><a href="board.php">취소하기</a></button>
                                        <button class="btn_submit3" type="submit" value="저장하기"><a href="#">저장하기</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->
    <footer id="footer">
            <?php
            include "../include/mainFooter.php";
            ?>
        </footer>
    <!-- //footer -->
</body>
</html>