<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/vars.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <div class="begie">
        <main id="contents">
            <section id="mainCont" class="gray">
                <h2 class="ir_so">회원가입 컨텐츠</h2>
                <article class="content-article">
                    <div class="member-form-box">
                        <div class="member-form">
                            <img src="../assets/img/logo.png" alt="logo">
                            <h3>Sign Up</h3>

                            <form name="join" action="joinSave.php" method="POST">
                                <fieldset>
                                    <legend class="ir_so">회원가입 입력폼</legend>
                                    <div class="member-box">
                                        <div>  
                                            <label for="youEmail">Email</label>
                                            <input type="email" name="youEmail" id="youEmail" class="input_write" placeholder="이메일을 입력해주세요." autocomplete="off" autofocus required>
                                        </div>
                                        <div>  
                                            <label for="youPass">Pass</label>
                                            <input type="password" name="youPass" id="youPass" class="input_write" maxlength="20" placeholder="비밀번호를 입력해주세요." autocomplete="off" required>
                                        </div>
                                        <div>  
                                            <label for="youPassC">Confirm Pass</label>
                                            <input type="password" name="youPassC" id="youPassC" class="input_write" maxlength="20" placeholder="비밀번호를 확인해주세요." autocomplete="off" required>
                                        </div>
                                        <div>  
                                            <label for="youName">Name</label>
                                            <input type="text" name="youName" id="youName" class="input_write" maxlength="5" placeholder="이름을 적어주세요." autocomplete="off" required>
                                        </div>
                                        <!-- <div>  
                                            <label for="youBirth">date of birth</label>
                                            <input type="text" name="youBirth" id="youBirth" class="input_write" placeholder="생년월일을 적어주세요. (YYYY-MM-DD)" autocomplete="off" required>
                                        </div>
                                        <div>  
                                            <label for="youPhone">Phone Number</label>
                                            <input type="text" name="youPhone" id="youPhone" class="input_write" placeholder="휴대폰 번호를 적어주세요. (000-0000-0000)" autocomplete="off" required>
                                        </div> -->
                                    </div>
                                </fieldset>
                                <!-- <div class="join-privacy mt20">
                                    <a href="../login/joinArrow.php"><label>개인정보 수집 및 이용에 대한 안내</label></a>
                                    <input type="checkbox" name="youCheck" required>
                                </div> -->
                                <button id="joinBtn" class="btn_submit1 mt60" type="submit">SIGN UP</button>
                            </form>
                        </div>
                    </div>
                    
                </article>
            </section>
        </main>
    </div>
    <!-- //contents -->

    <footer id="subFooter">
        <?php
            include "../include/subFooter.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>