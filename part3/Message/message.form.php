<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function check_input() {
            if (!document.message_form.rv_id.value)
            {
                alert("수신 아이디를 입력하세요!"); 
                document.message_form.rv_id.focus(); 
                return;
            }

            if (!document.message_form.subject.value)
            {
                alert("제목을 입력하세요!"); 
                document.message_form.subject.focus(); 
                return;
            }

            if (!document.message_form.content.value)
            {
                alert("내용을 입력하세요!"); 
                document.message_form.content.focus(); 
                return;
            }

            document.message_form.submit(); 
            } 
    </script>
</head>
<body>
    <section> 
        <div id="main_img_bar"> 
            <img src="./img/main_img.png"> 
        </div> 

        <div id="message_box"> 
            <h3 id="write_title">
            쪽지 보내기
            </h3> 

            <ul class="top_buttons"> 
                <li><span><a href="message_box.php?mode=rv">수신 쪽지함</a></span></li> 
                <li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li> 
            </ul>

            <form name="message_form" method="post" action="message_insert. 
            php?send_id=<?=$userid?>"> 
                <div id="write_msg"> 
                    <ul> 
                        <li> 
                            <span class="col1">보내는 사람 : </span> 
                            <span class="col2"><?=$userid?></span> 
                        </li> 
                        <li> 
                            <span class="col1">수신 아이디 : </span> 
                            <span class="col2"><input name="rv_id" type="text"></span> 
                        </li> 
                        <li>=
                            <span class="col1">제목 : </span> 
                            <span class="col2"> 
                            <input name="subject" type="text"></span> 
                        </li>
                        <li id="text_area"> 
                            <span class="col1">내용 : </span> 
                            <span class="col2"> 
                            <textarea name="content"></textarea> 
                            </span> 
                        </li> 
                    </ul>
                    
                    <button type="button" onclick="check_input()">보내기</button>
                </div> 
            </form> 
        </div> <!-- message_box --> 
    </section> 
</body>
</html>