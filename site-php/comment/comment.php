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
    <title>댓글</title>

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
        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <div class="content-article">
                    <!-- CARDTYPE -->
                                <section class="cardType">
                                <div class="cardType01">
                                    <h2>홈 인테리어 사이트</h2>
                                    <p>셀프 인테리어, 소품, 홈 패브릭 관련 사이트 입니다. <br>최근 업데이트 된 소품들을 확인해보세요. </p>
                                    <div class="card-wrap">
                                        <div class="card">
                                            <a href="#">
                                                <img src="../assets/img/card01.jpg" alt="인테리어 관련 사이트입니다." class="card-img">
                                                <strong class="card-title">지금 뜨는 아이템</strong>
                                                <span class="card-desc">셀프 인테리어, 소품, 홈 패브릭, 빈티지 가구를 위한 사이트...</span>
                                                <span class="card-keyword">
                                                    <span>#셀프인테리어</span>
                                                    <span>#홈스타그램</span>
                                                    <span>#소품</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="#">
                                                <img src="../assets/img/card02.jpg" alt="인테리어 관련 사이트입니다." class="card-img">
                                                <strong class="card-title">믹스 앤 매치 인테리어</strong>
                                                <span class="card-desc">셀프 인테리어, 소품, 홈 패브릭, 빈티지 가구를 위한 사이트...</span>
                                                <span class="card-keyword">
                                                    <span>#셀프인테리어</span>
                                                    <span>#홈스타그램</span>
                                                    <span>#소품</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="card">
                                            <a href="#">
                                                <img src="../assets/img/card03.jpg" alt="인테리어 관련 사이트입니다." class="card-img">
                                                <strong class="card-title">MUST HAVE ITEM</strong>
                                                <span class="card-desc">셀프 인테리어, 소품, 홈 패브릭, 빈티지 가구를 위한 사이트...</span>
                                                <span class="card-keyword">
                                                    <span>#셀프인테리어</span>
                                                    <span>#홈스타그램</span>
                                                    <span>#소품</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
            <!-- //cardtype01 -->
              </div>
              <article class="flow-article">
                <h3 class="ir_so">함께 정보 공유 하기</h3>
                <section id="comment" class="section-comment">
                    <h4>함께 참여하기</h4>
                    <p>새로운 아이템과 정보를 공유하고 싶으신분들은 댓글로 남겨주세요!!</p>
                    <div class="comment-form">
                        <form action="commentSave.php" method="POST" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="10" required>
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">사이트공유하기</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="사이트주소를 적어주세요." autocomplete="off" required>
                                    </div>
                                    <button class="btn_submit2" type="submit" value="신청하기">go</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);
                            
                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($result));
                            // echo "</pre>"

                            while($info = mysqli_fetch_array($result) ){
                        ?>   
                                  
                        <div>
                            <p><?=$info['youText']?></p>
                            <div>
                                <img src="https://cherin0115.github.io/dothome21/class/img/img05.jpg" alt="">
                                <span><?=$info['youName']?></span>
                                <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>                   
                    </div>
                </section>
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