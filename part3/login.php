<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
       $id = $_POST["id"];
       $passwd = $_POST["passwd"];
       /* db 연결 */
       $con = mysqli_connect("localhost", "user1", "12345", "sample");
       $sql = "select * from members where id='$id'";
       $result = mysqli_query($con, $sql);

       $num_match = mysqli_num_rows($result);

       if (!$num_match)
       {
            echo("
                <script>
                    window.alert('등록되지 않은 아이디입니다!')
                    history.go(-1)
                </script>
            ");
       }
       else
       {
           $row = mysqli_fetch_array($result);
           $db_pass = $row["pass"];

           mysqli_close($con);

           if($pass != $db_pass)
           {
               echo("
                    <script>
                        window.alert('비밀번호가 틀립니다!')
                        history.go(-1)
                    </script>
                ")
                exit;
           }
           else
           {
               session_start();
               $_SESSION["userid"] = $row[id];
               $_SESSION["username"] = $row["name"];
               $_SESSION["userlevel"] = $row["level"];
               $_SESSION["userpoint"] = $row["point"];

               echo("<script>location.href = 'index.php';</script>");
           }
       }
    ?>
        
</body>
</html>