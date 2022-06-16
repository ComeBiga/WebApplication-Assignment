
    <div id="head">
        <div id="logo"><a href="/index.php"><img src="/img/logo.gif" alt=""></a></div>
        <nav id="top_menu">
            <ul>
                <?php
                session_start();
                $userid="";
                if(!isset($_SESSION['userid'])) {
                ?>
                <li><a href="../part3/login_form.php" target="_BLANK">로그인</a></li>
                <?php
                } else {
                    $userid = $_SESSION["userid"]; ?>
                <li><a href="../part3/logout.php" target="_BLANK">로그아웃</a></li>
                <li><a href="../part3/member_modify_form.php" target="_BLANK">정보수정</a></li>
                <?php
                }
                ?>
                <li><a href="">English</a></li>
                <li><a href="">Japanese</a></li>
                <li><a href="">Chinese</a></li>
            </ul>
        </nav>
        
        <nav id="main_menu">
            <ul>
                <li id="lnbMenu"><a href="/AboutUs/Introduction.php">그리스신화박물관</a>
                    <ul class="sub_menu">
                        <li><a href="/AboutUs/Introduction.php">박물관소개</a></li>
                        <li><a href="/AboutUs/GreekMyth.php">그리스신화란</a></li>
                        <li><a href="/AboutUs/Provideo.php">홍보동영상</a></li>
                        <li><a href="/AboutUs/Blogger.php">블로거와 함께하는 그리스신화박물관</a></li>
                        <li><a href="/AboutUs/Pictures.php">사진으로보는 그리스신화박물관</a></li>
                    </ul>
                </li>
                <li id="lnbMenu"><a href="">전시안내</a>
                    <ul class="sub_menu">
                        <li><a href ="">전체</a></li>
                        <li><a href ="">창조관</a></li>
                        <li><a href ="">올리포스관</a></li>
                        <li><a href ="">신탁관</a></li>
                        <li><a href ="">영웅관</a></li>
                        <li><a href ="">휴먼관</a></li>
                        <li><a href ="">사랑관</a></li>
                        <li><a href ="">그리스마을</a></li>
                    </ul>
                </li>
                <li id="lnbMenu"><a href="">체험하기</a>
                     <ul class="sub_menu">
                         <li><a href = "">전체</a></li>
                         <li><a href = "">그리스의상 체험</a></li>
                         <li><a href = "">스탬프북</a></li>
                         <li><a href = "">아테네시민권 발급체험</a></li>
                         <li><a href = "">가면만들기 체험</a></li>
                         <li><a href = "">아트토이 체험</a></li>
                     </ul>
                </li>
                <li id="lnbMenu"><a href="">관람안내</a>
                     <ul class="sub_menu"> 
                         <li><a href="">관람안내</a></li>
                         <li><a href="">오시는길</a></li>
                     </ul>                
                </li>
                <li id="lnbMenu"><a href="/board/Notice_board_list.php">커뮤니티</a>
                     <ul class="sub_menu">
                         <li><a href="/Community/Notice.php">공지사항</a></li>
                         <li><a href="/Community/FAQ.php">자주하는 질문</a></li>
                         <li><a href="/Community/QnA.php">묻고 답하기</a></li>
                     </ul>               
                </li>
                <li id="lnbMenu"><a href="">이벤트</a>
                     <ul class="sub_menu">
                         <li><a href="">이벤트 안내</a></li>
                     </ul>               
                 </li>
                 <li id="lnbMenu"><a href="">채용정보</a>
                    <ul class="sub_menu">
                        <li><a href = "/Jobs/Job_Info.php">채용정보</a></li>
                        <li><a href = "/Jobs/Recommend_Job.php">추천 채용</a></li>
                        <li><a href = "/Jobs/Common_Job.php">일반 채용</a></li>
                         <li><a href = "/Jobs/Goverment_Job.php">정부지원일자리</a></li>
                         <li><a href = "/Jobs/Parttime_Job.php">아르바이트</a></li>
                    </ul>               
                </li>
            </ul>
        </nav>
   </div>  
   <div class="header_shadow"></div>
   <nav id="quick_menu">
       <ul>
           <li><a href=""><img src="/img/main/quick01.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick02.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick03.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick04.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick05.gif" alt=""></a></li> 
           <li><a href=""><img src="/img/main/quick06.gif" alt=""></a></li>                    
           <li><a href=""><img src="/img/main/quick07.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick08.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick09.gif" alt=""></a></li> 
           <li><a href=""><img src="/img/main/quick10.gif" alt=""></a></li>               
        </ul>
   </nav>

