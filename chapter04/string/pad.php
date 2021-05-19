<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字列をパディングする - honkaku</title>
</head>
<body>
<pre>
<?php
    // 連番を元に7桁のコード値を生成する例
    $sequence = 1234;
    $code = str_pad(strval($sequence), 7, '0', STR_PAD_LEFT);  // 結果：0001234
    var_dump($code);

    // 固定長電文フィールド用にスペースを埋めて8桁にする例
    $price = 920;
    $priceField = str_pad(strval($price), 8, ' '); // 結果：「920     」
    var_dump($priceField);
?>
</pre>
</body>
</html>