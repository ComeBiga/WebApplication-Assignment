<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자유게시판</title>
</head>
<body>
    <div>
        <h1>자유게시판</h1>
        <h4>자유롭게 어쩌구</h4>
        <table>
            <thead>
                <tr>
                    <th width="70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">추천수</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>

            <?php
            $sql = mq("select * from board order by idx desc limit 0,5");

            while($board = $sql->fetch_array())
            {
                $title = $board["title"];
                if(strlen($title)>30)
                {
                    $title = str_replace($board["title"],
                    mb_substr($board["title"],0,30,"utf-8")."...",
                    $board["title"]);
                }
            ?>
            <tbody>
                <tr>
                    <td width="70"><?php echo $board['idx']; ?></td>
                    <td width="500"><a href=""><?php echo $board['idx']; ?></a></td>
                    <td width="70"><?php echo $board['name']; ?></td>
                    <td width="70"><?php echo $board['date']; ?></td>
                    <td width="70"><?php echo $board['hit']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <div id="write_btn">
            <a href=""><button>글쓰기</button></a>
        </div>
    </div>
</body>
</html>