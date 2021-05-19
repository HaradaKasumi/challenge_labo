<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>デフォルト引数 - honkaku</title>
</head>
<body>
    <?php
        /* 税込金額を計算する関数 */
        function calcPriceWithTax(int $price, float $tax = 0.08): float
        {
            $result = $price * (1 + $tax);
            return $result;
        }

        // メインルーチン
        $priceWithTax = calcPriceWithTax(1000);
        echo "<p>計算結果：{$priceWithTax}</p>";

        $priceWithTax = calcPriceWithTax(1000, 0.05);
        echo "<p>計算結果：{$priceWithTax}</p>";
    ?>
</body>
</html>
