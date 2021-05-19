<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>字種を変換する - honkaku</title>
</head>
<body>
<pre>
<?php
    $greetings = 'こんにちは　コンニチハ　ｺﾝﾊﾞﾝﾊ　Ｈｅｌｌｏ　ＨＥＬＬＯ　HELLO　hello　１２３';
    echo mb_convert_case($greetings, MB_CASE_UPPER), PHP_EOL; // 英語が全て「HELLO」になる
    echo mb_convert_case($greetings, MB_CASE_LOWER), PHP_EOL; // 英語が全て「hello」になる
    echo mb_convert_case($greetings, MB_CASE_TITLE), PHP_EOL; // 英語が全て「Hello」になる

    echo mb_convert_kana($greetings, 'KV'), PHP_EOL; // 「ｺﾝﾊﾞﾝﾊ」が「コンバンハ」になる
    echo mb_convert_kana($greetings, 'rns'), PHP_EOL; // 英数字が全て半角英数字になる
?>
</pre>
</body>
</html>