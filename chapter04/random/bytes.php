<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ランダムな数値 - honkaku</title>
</head>
<body>
<pre>
<?php
    // 5バイトのランダム値を生成する。
    // 各バイトは0x00～0xffの範囲となる。
    $bytes = random_bytes(5);
    echo bin2hex($bytes), PHP_EOL;   // 結果例：03648d5fcb(10文字になる)

    $bytes = openssl_random_pseudo_bytes(5);
    echo bin2hex($bytes), PHP_EOL;   // 結果例：d08dafbdd3(10文字になる)
?>
</pre>
</body>
</html>