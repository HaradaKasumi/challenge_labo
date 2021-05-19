<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字列を分割する - honkaku</title>
</head>
<body>
<pre>
<?php
    $today = '2019-03-16';

    // ハイフンで分割した結果を、そのまま配列で受け取る例
    $dateElements = explode('-', $today);
    print_r($dateElements); // 結果：Array([0] => 2019 [1] => 03 [2] => 16)

    // ハイフンで分割した結果を、list()でスカラー変数に分けて受け取る例
    list($year, $month, $day) = explode('-', $today);
    echo '年：', $year,     PHP_EOL;
    echo '月：', $month,    PHP_EOL;
    echo '日：', $day,      PHP_EOL;
?>
</pre>
</body>
</html>