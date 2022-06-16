<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css?ver=1">
    <link rel="stylesheet" href="../css/subpage_common.css?ver=3">
    <link rel="stylesheet" href="../css/community.css?ver=1" type="text/css">
    <link rel="stylesheet" href="../css/head_type1.css?ver=1">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    
</head>

<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="slider">
           <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
               <?php include ("../Community/left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3 id="page_head">공지사항</h3>
                <div id="location">HOME>커뮤니티>공지사항</div>
            	<div id="contents">
					<div id="board_box">
						<h3>
							게시판 > 목록보기
						</h3>
						<ul id="Notice_board_list">
							<li>
								<span class="col1">번호</span>
								<span class="col2">제목</span>
								<span class="col3">글쓴이</span>
								<span class="col4">첨부</span>
								<span class="col5">등록일</span>
								<span class="col6">조회</span>
							</li>

							<?php

							if (isset($_GET["page"]))
								$page = $_GET["page"];
							else
								$page = 1;

							$con = mysqli_connect("localhost", "user1", "12345", "sample");
							$sql = "select * from board order by num desc";
							$result = mysqli_query($con, $sql);
							$total_record = mysqli_num_rows($result); // 전체 글 수

							$scale = 10;

							// 전체 페이지 수($total_page) 계산 
							if ($total_record % $scale == 0)     
								$total_page = floor($total_record/$scale);      
							else
								$total_page = floor($total_record/$scale) + 1; 
						
							// 표시할 페이지($page)에 따라 $start 계산  
							$start = ($page - 1) * $scale;      

							$number = $total_record - $start;

							for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
							{
								mysqli_data_seek($result, $i);
								// 가져올 레코드로 위치(포인터) 이동
								$row = mysqli_fetch_array($result);
								// 하나의 레코드 가져오기
								$num         = $row["num"];
								$id          = $row["id"];
								$name        = $row["name"];
								$subject     = $row["subject"];
								$regist_day  = $row["regist_day"];
								$hit         = $row["hit"];

								if ($row["file_name"])
									$file_image = "<img src='./img/file.gif'>";
								else
									$file_image = " ";
							
							// continue 'for'
							?>

							<li>
								<span class="col1"><?=$number?></span>
								<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><?=$file_image?></span>
								<span class="col5"><?=$regist_day?></span>
								<span class="col6"><?=$hit?></span>
							</li>	

							<?php

							$number--;
							}

							mysqli_close($con);

							?>
						</ul>

						<ul id="page_num"> 	
							<?php

							if ($total_page>=2 && $page >= 2)	
							{
								$new_page = $page-1;
								echo "<li><a href='Notice_board_list.php?page=$new_page'>◀ 이전</a> </li>";
							}		
							else 
								echo "<li>&nbsp;</li>";

							// 게시판 목록 하단에 페이지 링크 번호 출력
							for ($i=1; $i<=$total_page; $i++)
							{
								if ($page == $i)     // 현재 페이지 번호 링크 안함
								{
									echo "<li><b> $i </b></li>";
								}
								else
								{
									echo "<li><a href='Notice_board_list.php?page=$i'> $i </a><li>";
								}
							}
							if ($total_page>=2 && $page != $total_page)		
							{
								$new_page = $page+1;	
								echo "<li> <a href='Notice_board_list.php?page=$new_page'>다음 ▶</a> </li>";
							}
							else 
								echo "<li>&nbsp;</li>";

							?>
						</ul> <!-- page -->

						<ul class="buttons">
							<li><button onclick="location.href='Notice_board_list.php'">목록</button></li>
							<li>

							<?php 
								if($userid) {
							?>

								<button onclick="location.href='board_form.php'">글쓰기</button>
							
							<?php
								} else {
							?>

								<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
							
							<?php
								}
							?>

							</li>
						</ul>
					</div> <!-- board_box -->
				</div>
                    
				<article id="sub_contact">
					<div>
						<h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
					</div>
				</article>
            </section>
        </div>

        <footer>
            <?php include("../footer.html"); ?>
        </footer>
 	</div>
</body>
</html>