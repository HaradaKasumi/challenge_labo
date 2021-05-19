<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字コード設定・取得 - honkaku</title>
</head>
<body>
<pre>
<?php
    echo '●変更前の文字コード：', mb_internal_encoding(), PHP_EOL;

    // 文字コードを変更する
    mb_internal_encoding('SJIS-Win');

    echo '●変更後の文字コード：', mb_internal_encoding(), PHP_EOL;
?>
</pre>
</body>
</html>