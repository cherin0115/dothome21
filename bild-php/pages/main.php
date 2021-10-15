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
    <title>Bild</title>
    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
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
    <!-- main -->
    <div class="main">
        <section class="section" id="cont1">
            <div class="container">
                <article class="cont-wrap">
                    <div class="img-wrap">
                    </div>
                    <div class="desc-wrap">
                        <h2>Want to get <br> &nbsp; &nbsp; &nbsp;better pictures?</h2>
                        <p>R01로 편집됨</p>
                        <button>EDIT</button>
                    </div>
                </article>
            </div>
        </section>
        <section class="section" id="cont2">
            <div class="container">
                <article class="cont-wrap">
                    <div class="img-wrap">
                    </div>
                    <div class="desc-wrap">
                        <h2>More Creative,<br>More Fun!</h2>
                        <p>G01로 편집됨</p>
                        <button>EDIT</button>
                    </div>
                </article>
            </div>
        </section>
        <section class="section" id="cont3">
            <div class="container">
                 <article class="cont-wrap">
                    <div class="desc-wrap">
                        <h2>Make it with Bild.</h2>
                        <p>Y01로 편집됨</p>
                        <button>EDIT</button>
                    </div>
                    <div class="img-wrap">
                    </div>
                </article>
            </div>
        </section>
        <section class="section" id="cont4">
            <div class="container">
                <div class="box aboutus">
                    <h1>About Bild</h1>
                    <p>사진 보정 웹사이트 Bild는 사용자가 손쉽게 자주 쓰는 필터를 저장하고 공유하여 필요할 때 마다 꺼내쓸 수 있는 웹사이트입니다.
                    필터 레시피를 만들고 공유함으로써 자신만의 스타일을 뽐낼 수 있으며, 좋아요 및 댓글 기능을 제거한 나만의 공간입니다.
                    </p>
                    <p>B01로 편집됨</p>
                </div>
            </div>
        </section>
        <section class="section" id="cont5">
            <div class="cont5Box">
                <div class="container">
                    <article class="cont-wrap">
                        <div class="desc-wrap">
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="section" id="cont6">
            <div class="container">
                 <article class="cont-wrap">
                     <div class="icon-inner">
                         <img class="triangle" src="../assets/img/Triangle.png" alt="화살표아이콘">
                    </div>
                    <div class="desc-wrap">
                        <div class="Box qna">
                           <div class="qnaTitle">
                                <h2>Q&A</h2>
                                <a href="../board/baord.php"><img class="plus" src="../assets/img/plus.png" alt="plusbutton"></a>
                           </div>
                           <div class="BoardBox">
                                <a href='../board/boardView.php?boardID=103'><ul><li>포인트 적립 유효기간은 언제인가요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=100'><ul><li>같이 사진찍으러 갈사람~있나여</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=99'><ul><li>필터는 어떻게 적용하는거예요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=98'><ul><li>구글 연동 가능한가요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=97'><ul><li>회원가입은 어떻게 하는건가요?</li><li>2021.10.14</li></ul></a>
                           </div>
                        </div>
                        <div class="Box faq">
                            <div class="faqTitle">
                                <h2>COMMUNITY</h2>
                                <a href="../board/board.php"><img class="plus" src="../assets/img/plus.png" alt="plusbutton"></a>
                           </div>
                           <div class="BoardBox">
                                <a href='../board/boardView.php?boardID=103'><ul><li>집에 같이 가자~~~~</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=100'><ul><li>필터효과 나만 못하나봐</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=99'><ul><li>역시 유료가 좋은거 같아요.</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=98'><ul><li>구글 연동 가능한가요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=97'><ul><li>회원가입은 어떻게 하는건가요?</li><li>2021.10.14</li></ul></a>
                           </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <!-- //main -->
    <!-- footer -->
    <footer id="footer">
        <?php
            include "../include/mainFooter.php";
        ?>
    </footer>
    <!-- //footer -->