<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css?ver=1">
    <link rel="stylesheet" href="../css/subpage_common.css?ver=3">
    <link rel="stylesheet" href="../css/community.css?ver=1">
    <link rel="stylesheet" href="../css/head_type1.css?ver=1">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
  
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.html"); ?>
        </header>

        <section id="slider">
           <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
               <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3 id="page_head">묻고답하기</h3>
                <div id="location">HOME>커뮤니티>묻고답하기</div>
                
                <div id="contents">
                <form id="search_form" action="" method="get">
                        <select name="search_word" id="">
                            <option value="">제목+내용</option>
                            <option value="">제목</option>
                            <option value="">이름</option>
                            <option value="">내용</option>
                        </select>
                        <input type="text" name="word" id="">
                        <input type="submit" value="검색">
                    </form>
                    
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">제목</th>
                                <th scope="col">작성자</th>
                                <th scope="col">파일</th>
                                <th scope="col">작성일</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php for($i=8;$i>=0;$i--){ ?>
                                <tr>
                                    <td class="jn_num"><?php echo $i+1 ?></td>
                                    <td class="jn_title"><a href="">문의 드립니다</a></td>                                    <td class="jn_author">운영자</td>
                                    <td class="jn_ad">X</td>
                                    <td class="jn_date">2021-04-18</td>
                                    <td class="jn_vCount">10</td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>
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