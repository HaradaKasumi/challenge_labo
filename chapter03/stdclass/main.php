<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>stdClass - honkaku</title>
</head>
<body>
<pre>
<?php
    // データを出力する関数。
    // object型の型宣言で、stdClassも受け取ることができる
    function printData(object $data): void
    {
        print_r($data);
    }

    $data = new stdClass();
    $data->name = 'Tarou';
    $data->address = '東京都';
    $data->age = 28;
    printData($data);
?>
</pre>
</body>
</html>
