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
    // 前後にスペースがある文字列をトリムする
    $greeting = ' こんにちは ';
    var_dump(trim($greeting));

    // 前後にスペース・タブ・改行コードがある文字列をトリムする
    $greeting = " こんにちは\t\r\n";
    var_dump(trim($greeting));
?>
</pre>
</body>
</html>