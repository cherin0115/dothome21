<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!--style-->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">풋터 바로가기</a>
    </div>
    <!--//skip-->
    <header id="header">
            <h1><a href="../pages/main.php">php <em>class</em></a></h1>
            <nav>
                <h2 class="ir_so">메인 메뉴</h2>
                <ul>
                    <li><a href="#">댓글</a></li>
                    <li><a href="#">회원가입</a></li>
                    <li><a href="#">로그인</a></li>
                    <li><a href="#">게시판</a></li>
                    <li><a href="#">블로그</a></li>
                </ul>
            </nav>
            <div class="member">
                <strong class="ir_so">회원 정보 영역</strong>
                <a href="../login/login.php">로그인</a>
                <a href="../login/join.php">회원가입</a>
            </div>
        </header>
        <!--//header-->
        
        <main id="contents">
            <section id="mainCont"  class="gray">
                <h2 class="ir_so">회원가입 컨텐츠</h2>
                <article class="content-article">
                    <div class="member-form">
                        <h3>회원가입</h3>
                        <div class="join-info">
                            <ul class="list">
                                <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                                <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다</li>
                            </ul>
                        </div>
                        <div class="join-privacy">
                            <ul class="list">
                                <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                                <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                                <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                                <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                            </ul>
                        </div>
                        <form name="join" action="joinSave.php" method="POST"></form>
                    </div>
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