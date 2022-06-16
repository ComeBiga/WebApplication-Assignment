<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css?ver=2">
    <link rel="stylesheet" href="../css/subpage_common.css?ver=3">
    <link rel="stylesheet" href="../css/community.css?ver=1" type="text/css">
    <link rel="stylesheet" href="../css/head_type1.css?ver=1">
    <link rel="stylesheet" href="../css/sub_style.css?ver=1">
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
                <h3 id="page_head">채용정보</h3>
                <div id="location">HOME>커뮤니티>채용정보</div>
                <div id="contents">
                    <div class="job_list_wrap">
                        <div class="job_list_search_table">
                        <form action="" method="post">
                        <table>
                            <colgroup>
                                <col style="width:15%">
                                <col style="width:35%">
                                <col style="width:15%">
                                <col style="width:35%">
                            </colgroup>

                            <tbody>
                                <tr class="row1">
                                    <th>근무지역</th>
                                    <td>
                                        <select name="region" id="region">
                                            <option value="" selected="">=근무지역=</option>
                                            <option value="11000">서울</option>
                                            <option value="26000">부산</option>
                                            <option value="27000">대구</option>
                                            <option value="28000">인천</option>
                                            <option value="29000">광주</option>
                                            <option value="30000">대전</option>
                                            <option value="31000">울산</option>
                                            <option value="36110">세종</option>
                                            <option value="41000">경기</option>
                                            <option value="42000">강원</option>
                                            <option value="43000">충북</option>
                                            <option value="44000">충남</option>
                                            <option value="45000">전북</option>
                                            <option value="46000">전남</option>
                                            <option value="47000">경북</option>
                                            <option value="48000">경남</option>
                                            <option value="50000">제주</option>
                                        </select>
                                        
                                    </td>
                                    
                                    <th>경력</th>
                                    <td>
                                        <select name="career" id="career">
                                            <option value="" selected="">전체</option>
                                            <option value="N">신입</option>
                                            <option value="E">경력</option>
                                            <option value="Z">관계없음</option>
                                        </select>
                                        
                                        
                                    </td>
                                
                                
                                </tr>
                                <tr class="row2">
                                    <th>희망직종</th>
                                    <td colspan="3">
                                        <select name="occupation" id="occupation">
                                            <option value="">=직종코드=</option>
                                            <option value="01">관리자, 공학기술자(엔지니어)	</option>
                                            <option value="02">경영·사무·금융·보험	 </option>
                                            <option value="03">교육·연구·법률</option>
                                            <option value="04">의료·보건·사회복지</option>
                                            <option value="05">문화·예술·신문방송·디자인·캐드</option>
                                            <option value="06">영업·판매·TM·고객상담</option>
                                            <option value="07">미용·여행·숙박·오락·스포츠·음식·경비청소</option>
                                            <option value="08">무역·물류·운전·운송	</option>
                                            <option value="09">건설·건축·토목·환경·에너지·산업안전</option>
                                            <option value="10">기계·금속·재료</option>
                                            <option value="11">전기·전자</option>
                                            <option value="12">화학·섬유·식품</option>	 
                                            <option value="13">IT·정보통신·웹</option>	 
                                            <option value="14">인쇄·목재·가구·종이·공예·상하수·재활용·농림어업·군인</option>
                                            <option value="15">생산직·단순노무·경비·청소</option>	
                                        </select>				
                                        <script>$("#occupation").val("");</script>
                                    </td>
                                </tr>
                                <tr class="row3">
                                    <th>희망임금</th>
                                    <td colspan="3">
                                    <div style="float:left;margin-right:15px;">
                                        <select name="salTp" id="salTp" onchange="if($(this).val()=='Y'){$('#PayBox').show();}else{$('#PayBox').hide();}">
                                            <option value="">=임금형태=</option>
                                            <option value="D">일급</option>
                                            <option value="H">시급</option>
                                            <option value="M">월급</option>
                                            <option value="Y">연봉</option>
                                            <option value="">관계없음</option>
                                        </select>
                                        <script>$("#salTp").val("");</script>
                                    </div>
                                
                                    <!--급여 -->
                                    <div style="display:none;float:left;" id="PayBox">
                                    <input type="text" name="minPay" id="minPay" value="0" class="onlyNumber" style="width:80px;">만원이상 
                                    <input type="text" name="maxPay" id="maxPay" value="" class="onlyNumber" style="width:80px;">만원이하
                                    </div>
                                    
                                    </td>
                                </tr>
                                    <!-- 
                                    <tr class="row8">
                                    <th>등록기간</th>
                                    <td colspan="3">
                                        <input type="text" name="" class="txt_date uiDate_input" maxlength="10" >
                                        <span>~</span>
                                        <input type="text" name="" class="txt_date uiDate_input" maxlength="10" >
                                    </td>
                                </tr> -->
                                
                            </tbody>
                        </table>
                        <a href="" class="job_search_btn">검색하기</a>
                    </form>

                        </div>
                    </div>
                    
                    <div class="job_list_top">
                        <span>검색건수:</span>
                        <span class="total">총 96902건</span>
                        <span class="position" style="float:right;"><strong>1</strong>/9691  page</span>
                    </div>
                    
                    <div class="job_list">
								<!-- 리스트 내용 시작 -->
								<div class="job_list_table">
									<table>
										<colgroup>
                                            <col class="col1">
                                            <col class="col2">
                                            <col class="col3 list_hidden">
                                            <col class="col4 list_hidden">
                                            <col class="col5 list_hidden">
                                        </colgroup>
										<thead>
                                            <tr>
                                                <th>회사명</th>
                                                <th>채용제목/임금/근무지역/근무형태</th>
                                                <th class="list_hidden">학력/경력</th>
                                                <th class="list_hidden">등록일</th>
                                                <th class="list_hidden">마감일</th>
                                            </tr>
                                        </thead>		

                                        <tbody>
                                            <?php
                                            for($i=0;$i<10;$i++)
                                            {
                                            ?>
                                            <tr onclick="view('K140022204210004');" style="cursor: pointer;">
                                                <td>(주)정림</td>
                                                
                                                    <td class="job_info">
                                                    <div>
                                                        <a href="#" onclick="view('K140022204210004');">
                                                            <p class="job_title">품질및납품기사(프레스자동차부품) 모집</p>
                                                            <ul>
                                                                <li>
                                                                    <span class="type1 type1_4">연봉</span>
                                                                    <span class="type2">주6일근무</span>
                                                                    <span class="type3">2800만원</span>
                                                                </li>
                                                                <li class="bar"></li>
                                                                <li class="area">대구 달서구</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="list_hidden"> 학력무관<br>관계없음</td>
                                                <td class="list_hidden">22-04-21</td>
                                                <td class="list_hidden">22-05-20</td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
    
                                        </tbody>
                                    </table>
							</div>
							</div>

                    <!-- <table>
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
                                    <td class="jn_title"><a href="">새 글입니다</a></td>                                    <td class="jn_author">운영자</td>
                                    <td class="jn_ad">O</td>
                                    <td class="jn_date">2021-04-14</td>
                                    <td class="jn_vCount">10</td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table> -->
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