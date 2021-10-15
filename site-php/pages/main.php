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
                <?php
                    echo "<pre>";
                    var_dump($_SESSION);
                    echo "</pre>";
                 ?>
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