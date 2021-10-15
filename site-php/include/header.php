
<h1><a href="../pages/main.php">php <em>class</em></a></h1>
<nav>
    <h2 class="ir_so">메인 메뉴</h2>
    <ul>
        <li><a href="../comment/comment.php">댓글</a></li>
        <li><a href="#">회원가입</a></li>
        <li><a href="#">로그인</a></li>
        <li><a href="../board/board.php">게시판</a></li>
        <li><a href="#">블로그</a></li>
    </ul>
</nav>
<div class="member">
    <strong class="ir_so">회원 정보 영역</strong>
    <?php if( isset($_SESSION['myMemberID']) ){?>
            <a href="#"><?= $_SESSION['youName']?>님 환영합니다.</a>
            <a href="../login/logout.php">로그아웃</a>
    <?php } else { ?>
            <a href="../login/login.php">로그인</a>
            <a href="../login/join.php">회원가입</a>
    <?php } ?>

</div>