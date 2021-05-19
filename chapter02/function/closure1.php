<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クロージャ - honkaku</title>
</head>
<body>
    <?php
        $addFunction = function ($a, $b) {
            return $a + $b;
        };
        $total = $addFunction(10, 20);
    ?>
    <p>計算結果：<?=$total?></p>
</body>
</html>
