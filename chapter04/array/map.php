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

    $newExpireDates = array_map(
        // 有効期限を3年間延長する関数(引数$callback)
        function($date) {
            return (new DateTime($date))->modify('+ 3years')->format('Y-m-d');
        },
        $expireDates
    );

    echo '●expireDatesの要素(内容はもとのまま)', PHP_EOL;
    print_r($expireDates);

    echo '●newExpireDatesの要素(内容が書き換わっています)', PHP_EOL;
    print_r($newExpireDates);
?>
</pre>
</body>
</html>