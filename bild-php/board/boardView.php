<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
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
                <div class="container">
                    <div class="boardView-container">
                        <div class="board-wrap">
                            <form action="boardWriteSave.php" name="boardWrite" method="post">
                                <fieldset>
                                    <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>

                                    <?php
                                        $boardID = $_GET['boardID'];
                                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                        $result = $connect -> query($sql);
                                        $view = "UPDATE myBoard SET boardView = boardView+1 WHERE myBoardID = {$boardID}";
                                        $connect -> query($view);
                                        
                                        if($result){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<div class='wrap'><div class='left'>제목</div><div class='right'>".$info['boardTitle']."</div></div>";
                                            echo "<div class='wrap'><div class='left'>글쓴이</div><div class='right'>".$info['youName']."</div></div>";
                                            // echo "<tr><th>등록일</th><td class='left'>".date('Y-m-d H:i', $info['regTime'])."</td></tr>";
                                            // echo "<tr><th>조회수</th><td class='left'>".$info['boardView']."</td></tr>";
                                            echo "<div class='wrap'><div class='write'>내용</div><div class='right'>".$info['boardContent']."</div></div>";
                                            echo "<div class='wrap'><div class='left'>답변</div><div class='viewAnswer'>".$info['boardAnswer']."</div></div>";
                                        }
                                    ?>

                                    <!-- <div class="wrap">
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
                                    <div class="wrap">
                                        <label class="left">답변</label>
                                        <div class="viewAnswer">포인트 유효기간은 적립일로부터 1년까지 사용가능합니다.사용기간이 만료된 포인트는 매월 말일 기준으로 자동 일괄 소멸됩니다.<br>
                                        다만, 이벤트 성으로 지급된 포인트의 경우 사용기간이 상이하므로 이용에  참고 부탁드립니다.<br>(기본 적립유효기간 예시) 적립일 : 2019년 11월 1일 / 소멸예정일 : 2020년 11월 30일</div>
                                    </div> -->
                            </fieldset>
                        </form>
                        </div>
                            <button class="btn" type="submit" value="저장하기"><a href="board.php">목록보기</a></button>
                            <button class="btn" type="submit" value="수정하기"><a href="boardModify.php?boardID=<?=$_GET['boardID']?>">수정하기</a></button>
                            <button class="btn" type="submit" value="삭제하기"><a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" onclick="confirm('정말 삭제하시겠습니까?')">삭제하기</a></button></button>
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
                        <form action="boardViewSave.php" method="POST" name="comment">
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
                                    <button class="btn_submit2" type="submit" value="작성하기">Click</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 50";
                            $result = $connect -> query($sql);

                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($result));
                            // echo "</pre>";

                            while($info = mysqli_fetch_array($result)){
                        ?>
                            <div>
                            <p><?=$info['youText']?></p>
                                <div>
                                    <!-- <img src="http://lsrljm8011.dothome.co.kr/site/img/img-card04.jpg" alt=""> -->
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        <!-- <div>
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
                        </div> -->
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