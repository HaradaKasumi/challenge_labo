<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>forによる配列ループ - honkaku</title>
</head>
<body>
<pre>
<?php
    $lines = [
        'いろはにほへと',
        'ちりぬるを',
        'わかよたれそ'
    ];
    for ($lineNumber = 1; $lineNumber <= count($lines); $lineNumber++) {
        echo $lineNumber, '行目：', $lines[$lineNumber - 1], PHP_EOL;
    }
?>
</pre>
</body>
</html>
