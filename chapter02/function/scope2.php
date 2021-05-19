<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>関数のスコープ2 - honkaku</title>
</head>
<body>
    <?php
        $num1 = 3;
        $num2 = 10;

        /* 2つの数値を足し算して出力する関数 */
        function add()
        {
            // globalキーワードを使い、関数外で定義された$num1,$num2を関数内で使えるようにする
            global $num1, $num2;
            return $num1 + $num2;
        }
        // メインルーチン
        $result = add();
        echo $result;
    ?>
</body>
</html>
