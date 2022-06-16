<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table연습</title>
    <style>
        table{
            border-style: groove;
        }

        th, td{
            width : 100px;
        }
        
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>번호</th><th>성명</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $name = "홍길동";
            while($i <= 10)
            {
                ?>
                <tr><th><?php echo($i); ?></th><td><?php echo($name); ?></td></tr>
                <?php

                $i++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>