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
                <div class="joinType">
                    <div class="joinSavePop">
                        <div class="pop">
                            <img src="../assets/img/joinSavePop.png" alt="회원가입확인팝업">
                            <h3>회원가입이 완료 되었습니다.</h3>
                            <p>로그인 후 안전하고 편리하게 서비스를 이용하실 수 있습니다.</p>
                            <button class="joinPopBtn">LOGIN</button>
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