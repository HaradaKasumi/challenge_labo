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
        // 可変長引数は最後の引数にしか使えないことに注意してください。
        function add(string $header, int ...$numbers): string
        {
            $total = 0;
            foreach ($numbers as $number) {
                $total += $number;
            }
            return $header . $total;
        }

        $result = add('計算結果：', 3, 2, 9, 1);
        echo $result;
    ?>
</body>
</html>
