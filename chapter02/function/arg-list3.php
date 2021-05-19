<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>可変長引数 - honkaku</title>
</head>
<body>
    <?php
        // 複数の数値を足し算して返す関数。
        function add(int ...$numbers): int
        {
            $total = 0;
            foreach ($numbers as $number) {
                $total += $number;
            }
            return $total;
        }

        // add関数に渡す数値配列。
        $numbers = [3, 2, 4];
        $result = add(...$numbers);
        echo $result;
    ?>
</body>
</html>
