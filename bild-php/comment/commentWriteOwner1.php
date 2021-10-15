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
                <div class="boardType">
                        <p>Q&A</p>
                        <h3>Write comment</h3>
                        <div class="board-container">
                            <div class="board-wrap">
                                <form action="boardWriteSave.php" name="boardWrite" method="post">
                                    <fieldset>
                                            <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>
                                            <div class="wrap">
                                                <div class="left">제목</div>
                                                <div class="right">포인트 유효기간은 언제까지 인가요?</div>
                                            </div>
                                            <div class="wrap">
                                                <div class="left">글쓴이</div>
                                                <div class="right">alsdk</div>
                                            </div>
                                            <div class="wrap">
                                                <div class="write">내용</div>
                                                <div class="right">포인트 유효기간은 언제까지 인가요?  언제까지 사용가능 한가요?</div>
                                            </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">함께 정보 공유 하기</h3>
                <section id="comment" class="section-comment">
                    <h4>COMMENT</h4>
                    <p>질문의 답을 공유하시고 싶으신 분들은 이곳에 남겨주세요.</p>
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
                                        <label for="youText" class="ir_so">댓글</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 comnt" placeHolder="댓글을 여기에 남겨주세요." autocomplete="off" required>
                                    </div>
                                    <button class="btn_submit2" type="submit" value="저장하기">Click</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <div>
                            <p>유효기간은 6개월까지 아닌가요?유효기간은 6개월까지 아닌가요?유효기간은 6개월까지 아닌가요?유효기간은 6개월까지 아닌가요?유효기간은 6개월까지 아닌가요?</p>
                            <div>
                                <span>김채린</span>
                                <span>2021-09-16 11:51</span>
                            </div>
                        </div>
                        <div>
                            <p>제가 알기로는 1년까지인걸로..</p>
                            <div>
                                <span>김채린</span>
                                <span>2021-09-16 11:51</span>
                            </div>
                        </div>
                        <div>
                            <p>4565</p>
                            <div>
                                <span>김채린</span>
                                <span>2021-09-16 11:51</span>
                            </div>
                        </div>
                        <div>
                            <p>5667</p>
                            <div>
                                <span>김채린</span>
                                <span>2021-09-16 11:51</span>
                            </div>
                        </div>
                    </div>
                </section>
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
</body>
</html>