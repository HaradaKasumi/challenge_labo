<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>エラーレベル制御 - honkaku</title>
</head>
<body>
    <?php
        ini_set('display_errors', 'On');
        ini_set('error_reporting', E_ALL & ~E_NOTICE);
        function calcSum($sum1, $sum2, $sum3, $sum4)
        {
            return $sum1 + $sum2 + $sam3 + $sum4;
        }
    ?>
    <p>計算結果：<?=calcSum(1000, 2000, 3000, 4000)?></p>
</body>
</html>
