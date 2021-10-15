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

    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">풋터 바로가기</a>
    </div>
    <!--//skip-->
    <header id="header">
        <?php
          include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

        <!--//header-->
        
        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <article class="content-article">

                    <!-- boardTyype -->
                    <div class="boardType">
                        <h3>글쓰기</h3>
                        <p>게시글을 작성해주세요,</p> 
                         <div class="board-write">          
                             <form action="boardWriteSave.php" name="boardWrite" method="post">
                                 <fieldset>
                                     <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>
                                     <div>
                                         <label for="boardTitle">제목</label>
                                         <input type="text" id="boardTitle" name="boardTitle" class="title-text" placeholder="제목을 입력해주세요" required autofocus>
                                     </div>
                                     <div>
                                         <label for="boardContent">내용</label>
                                         <textarea name="boardContent" id="boardContent" rows="13" class="title-text" placeholder="내용을 작성해주세요" required></textarea>
                                     </div>
                                 </fieldset>
                                 <button class="board-btn" type="submit" value="저장하기">저장하기</button>
                             </form>
                        </div>
                    </div>
                    <!-- //boardType -->

                </article>
            </section>
        </main>
        <!--//contents-->

        <footer id="footer">
            footer
        </footer>
        <!--//footer-->

</body>
</html>