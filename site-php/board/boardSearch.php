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
    <link rel="stylesheet" href="../assets/css/var.css">
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
                    <h3>검색 결과 게시판</h3>
                    
                    <?php
                        $searchKeyword = $_GET['searchKeyword'];  
                        $searchOption = $_GET['searchOption'];

                        // echo $searchKeyword, $searchOption;

                        if($searchKeyword == '' || $searchKeyword == null){
                          echo "<p>검색어가 없습니다.</p>";  
                        }
                    ?>
                    
                    <div class="board">
                        <div class="board-table">
                            <table>
                                <colgroup>
                                    <col style="width: 5%" />
                                    <col />
                                    <col style="width: 10%" />
                                    <col style="width: 12%" />
                                    <col style="width: 7%" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>등록자</th>
                                        <th>등록일</th>
                                        <th>조회수</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $searchKeyword = $connect -> real_escape_string($searchKeyword);
                                        $searchOption = $connect -> real_escape_string($searchOption);

                                        // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                        // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) WHERE b.boardContent LIKE '%{$searchKeyword}%'ORDER BY myBoardID DESC LIMIT 10";
                                        // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                   
                                        $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (m.myMemberID = b.myMemberID) ";

                                        // $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                        // $sql .= "WHERE b.boardContent LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                        // $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";

                                        switch($searchOption){
                                            case 'title':
                                                $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                                break;
                                            case 'content':
                                                $sql .= "WHERE b.boardContent LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                                break;
                                            case 'name':
                                                $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
                                                break;
                                        }

                                        // echo $sql;
                                        $result = $connect -> query($sql);
                                        if($result){
                                            $count = $result -> num_rows;

                                            if($count > 0){
                                                for($i=1; $i<=$count; $i++){
                                                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                                                    echo "<tr>";
                                                    echo "<td>".$info['myBoardID']."</td>";
                                                    echo "<td><a href='boardView.php?boardID={$info['myBoardID']}'>".$info['boardTItle']."</a></td>";
                                                    echo "<td>".$info['youName']."</td>";
                                                    echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                                                    echo "<td>".$info['boardView']."</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                        }
                                   ?>
                                    <!-- <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="board-page">
                            <ul>
                                <li><a href="#">처음으로</a></li>
                                <li><a href="#">처음</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">다음</a></li>
                                <li><a href="#">마지막으로</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->
    <footer id="footer">
        footer
    </footer>
    <!-- //footer -->
</body>
</html>