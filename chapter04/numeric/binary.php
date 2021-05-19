<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>バイナリデータと16進数の相互変換 - honkaku</title>
</head>
<body>
<pre>
<?php
    $word = '奥多摩';
    echo '●奥多摩を16進数表現に変換します。', PHP_EOL;
    echo bin2hex($word), PHP_EOL;

    $binary = 'E7AEB1E6A0B9';
    echo '●E7AEB1E6A0B9の16進数表現をデコードします。', PHP_EOL;
    echo hex2bin($binary), PHP_EOL;
?>
</pre>
</body>
</html>