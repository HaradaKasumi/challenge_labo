<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>return命令 - honkaku</title>
</head>
<body>
    <?php
        function add($a, $b)
        {
            if ($a <= 0) {
                echo '引数aは正の数で指定してください。';
                return;
            }
            if ($b <= 0) {
                echo '引数aは正の数で指定してください。';
                return;
            }
            $total = $a + $b;
            echo '合計は', $total;
            return $total;
        }

        $total = add(5, -5);
        echo $total;
    ?>
</body>
</html>
