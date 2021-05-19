<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>正規表現による分割 - honkaku</title>
</head>
<body>
<pre>
<?php
    echo '●文字列を1文字ずつに分解する', PHP_EOL;
    $chars = preg_split('//u', 'こんにちは HELLO', -1, PREG_SPLIT_NO_EMPTY);
    print_r($chars);

    echo '●文字列を改行で分解する', PHP_EOL;
    $diary = <<< TEXT
2019年3月3日
今日は雨が降っています。
春が近づいているようです。
TEXT;
    $lines = preg_split("/(\r\n|\r|\n)/u", $diary);
    print_r($lines);

    echo '●文字列を半角または全角スペースで分解する', PHP_EOL;
    $words = preg_split("/[ 　]/u", 'あいうえお　かきくけこ さしすせそ');
    print_r($words);
?>
</pre>
</body>
</html>