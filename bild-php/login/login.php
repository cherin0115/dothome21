<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">로그인 바로가기</a>
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
            <h2 class="ir_so">로그인 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <img src="../assets/img/logo.png" alt="logo">
                    <h3>Log into Bild</h3>

                    <form name="login" action="loginSave.php" method="POST" class="mt100">
                        <fieldset>
                            <legend class="ir_so">로그인 입력폼</legend>
                            <div class="member-box">
                                <div>  
                                    <label for="youEmail"></label>
                                    <input type="email" name="youEmail" id="youEmail" class="input_write" placeholder="Email Address" autocomplete="off" autofocus>
                                </div>
                                <div class="mt100">  
                                    <label for="youPass"></label>
                                    <input type="password" name="youPass" id="youPass" class="input_write" maxlength="20" placeholder="Password" autocomplete="off">
                                </div>
                            </div>
                        </fieldset>
                        <div class="infos mt60">
                            <div class="btn-wrap">
                                <button class="info">아이디 찾기</button>
                            </div>
                            <!-- <div id="modal">
                                <div class="modal-bg">
                                    <div class="modal-cont">
                                        <div class="find-view">
                                            <div class="view-title">
                                                <ul>
                                                    <li class="active"><a href="#">아이디 찾기</a></li>
                                                    <li><a href="#">비밀번호 찾기</a></li>
                                                </ul>
                                            </div>
                                            <div class="view-cont">
                                                <div class="contentBox">
                                                    <div class="find mt40">
                                                        <input type="checkbox" name="youCheck" checked>
                                                        <label>회원정보에 등록한 휴대전화로 인증</label>
                                                    </div>
                                                    <fieldset class="mt30">
                                                        <legend class="ir_so">아이디 찾기 입력폼</legend>
                                                        <div class="findMember-box">
                                                            <div class="box">  
                                                                <label for="youName"></label>
                                                                <input type="email" name="youName" id="youName" class="input_write2" placeholder="이름" autocomplete="off">
                                                            </div>
                                                            <div class="box">  
                                                                <label for="youPhone"></label>
                                                                <input type="password" name="youPhone" id="youPhone" class="input_write2 mt10" maxlength="20" placeholder="핸드폰 번호" autocomplete="off">
                                                            </div>
                                                            <div class="box">  
                                                                <label for="youCer"></label>
                                                                <input type="password" name="youCer" id="youCer" class="input_write2 mt10" maxlength="20" placeholder="인증번호 6자리" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="find mt40">
                                                            <input type="checkbox" name="youCheck">
                                                            <label>본인 명의 휴대전화로 인증</label>
                                                        </div>
                                                        <div class="find mt10">
                                                            <input type="checkbox" name="youCheck">
                                                            <label>이메일로 인증</label>
                                                        </div>
                                                    </fieldset>
                                                    <button id="joinBtn" class="btn_submit2 mt40" type="submit">확인</button>
                                                </div>
                                                <div class="contentBox">
                                                    <div class="box">
                                                        <div class="imgBox">
                                                            <img src="../assets/img/findPassBox.png" alt="이미지">
                                                        </div>
                                                        <div class="imgTxt">
                                                            <span class="active">아이디 입력</span>
                                                            <span>본인 확인</span>
                                                            <span>비밀번호 재설정</span>
                                                        </div>
                                                    </div>
                                                    <form name="join" action="joinSave.php" method="POST">
                                                        <fieldset class="mt30">
                                                            <legend class="ir_so">비밀번호 찾기 입력폼</legend>
                                                            <div class="findMember-box mt60">
                                                                <div class="box">  
                                                                    <label for="youEmail">비밀번호를 찾고자 하는 아이디를 입력해주세요.</label>
                                                                    <input type="email" name="youEmail" id="youEmail" class="input_write2 mt10" placeholder="아이디" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <button id="nextBtn" class="btn_submit2 mt90" type="submit">다음</button>
                                                    </form>
                                                </div>
                                            </div>          
                                        </div>
                                    </div>
                                </div>
                            </div>  -->
                            <span>|</span>
                            <div class="btn-wrap">
                                <button class="info">비밀번호 찾기</button>
                            </div>
                            <span>|</span>
                            <div class="btn-wrap">
                                <button class="info"><a href="joinArrow.php">회원가입</a></button>
                            </div>
                        </div>
                        <button id="loginBtn" class="btn_submit1" type="submit">LOGIN</button>
                    </form>
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
    <script>
        //Code tab menu
        const viewTit = document.querySelectorAll(".view-title ul li");
        const viewCont = document.querySelectorAll(".view-cont > div");

        viewTit.forEach((element, index) => {
            element.addEventListener("click", function(){
                
                viewTit.forEach( el => {
                    el.classList.remove("active");
                });
                element.classList.add("active");

                viewCont.forEach( el => {
                    el.style.display = "none";
                })
                viewCont[index].style.display = "block";
            });
        })

    document.querySelector(".btn-wrap button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
    </script>
</body>
</html>