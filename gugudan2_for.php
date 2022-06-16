<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-style : outset;
            border-collapse : collapse;
            margin : 20px 10px;
            text-align : center;
        }
        th, td{
            border-style : outset;
        }
        th{
            width : 100px;
            padding : 10px;
            font-weight : bold;
            background : #eee;
        }
    </style>
    <title>구구단 표</title>
</head>
<body>
    <h3>- 구구단 표</h3>
    <table>
        <?php
            $a = 2; $b = 1;
            echo "<tr>";
            for($i = 2; $i <= 9; $i++)
            {
                echo "<th>$i 단</th>";
            }
            echo "</tr>";

            for($b = 1; $b <= 9; $b++)
            {
                echo "<tr>";
                for($a = 2; $a <= 9; $a++)
                {
                    $result = $a*$b;
                    echo "<td>".$a."x".$b."="."$result</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>