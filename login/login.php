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
        /* $db_id */
        $db_id="abcd";
        $db_passwd="1234";
        if( $id != $db_id )
        {
            echo "id가 없습니다.";
        }
        else if($passwd != $db_passwd)
        {
            echo "password가 일치하지 않습니다.";
        }
        
        session_start();
        $_SESSION['userid'] = $id;
        $_SESSION['passwd'] = $passwd;
        /*$_SeSSION['username'] = $db_username;*/
        
     ?>

     <script>
         locaiton.href = "index.php";
     </script>
</body>
</html>