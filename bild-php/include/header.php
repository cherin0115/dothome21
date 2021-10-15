<h1><a href="../pages/main.php"><img src="../assets/img/bildLogo2x.png" alt="logo"></h1></a>
<nav>
    <h2 class="ir_so">메인 메뉴</h2>
    <ul>
        <li><a href="../comment/comment.php">EDIT</a></li>
        <li><a href="#">RESEARCH</a></li>
        <li><a href="../board/board.php">COMMUNITY</a></li>
    </ul>
</nav>
<div class="member">
    <strong class="ir_so">회원 정보 영역</strong>
    <?php if( isset($_SESSION['myMemberID']) ){ ?>
            <a href="#">
                <div class="img-wrap">
                    <a href="#"><img src="../assets/img/L.png" alt="아이콘이미지"></a>
                    <a href="#"><img src="../assets/img/bell.png" alt="아이콘이미지"></a>
                    <a href="#"><img src="../assets/img/pf.png" alt="아이콘이미지"></a>
                </div>
            </a>
            <a href="../login/logout.php" class="login">LOGOUT</a>
    <?php } else { ?>
            <a href="../login/login.php" class="login">LOGIN</a>
            <a href="../login/joinArrow.php" class="login">SING UP</a>
    <?php } ?>
</div>
