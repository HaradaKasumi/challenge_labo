<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>丸め誤差 - honkaku</title>
</head>
<body>
    <?php
        /* (0.1 + 0.7) × 10 を切り捨てします。*/

        // 素直に計算する例(丸め誤差がおきる)
        $result1 = floor((0.1 + 0.7) * 10);

        // 文字列型にキャストする(正しい計算結果になる)
        $result2 = floor((string)(0.1 + 0.7) * 10);

        // BCMath関数を使って計算する(正しい計算結果になる)
        $result3 = floor((int)bcmul(bcadd(0.1, 0.7, 2), 10, 2));
    ?>
    <h4>(0.1 + 0.7) × 10の切り捨ての計算結果</h4>
    <p>result1：<?=$result1?></p>
    <p>result2：<?=$result2?></p>
    <p>result3：<?=$result3?></p>
</body>
</html>
