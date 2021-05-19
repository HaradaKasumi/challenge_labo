<?php /* ※本プログラムは期待通りに動作しません。 */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>関数の基本4 - honkaku</title>
</head>
<body>
    <?php
        $num1 = 3;
        $num2 = 10;

        /* 2つの数値を足し算して出力する関数 */
        function add($a, $b)
        {
            echo '$num1を出力します：', $num1;
        }

        // メインルーチン
        $result = add($num1, $num2);
        echo '$aを出力します：', $a;
    ?>
</body>
</html>
