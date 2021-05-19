<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列の全要素に処理をほどこす - honkaku</title>
</head>
<body>
<pre>
<?php
    // 有効期限リスト
    $expireDates = ['2020-01-03', '2021-12-11', '2019-08-10'];

    array_walk(
        $expireDates,
        // 有効期限を3年間延長する関数(引数$callback)
        function(&$date) {
            $date = (new DateTime($date))->modify('+ 3years')->format('Y-m-d');
        }
    );

    echo '●expireDatesの要素(内容が書き換わっています)', PHP_EOL;
    print_r($expireDates);
?>
</pre>
</body>
</html>