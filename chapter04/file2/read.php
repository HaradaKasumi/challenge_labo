<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルを1行ずつ読み込む - honkaku</title>
</head>
<body>
<pre>
<?php
    // sample.txtを読み込みます
    $file = new SplFileObject('files/sample.txt');
    $file->setFlags(SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);

    // sample.txtを1行ずつループ処理します。
    $lineNumber = 0;
    foreach ($file as $line) {
        $lineNumber++;
        echo "{$lineNumber}行目：『{$line}』", PHP_EOL;
    }
    $file = null;
?>
</pre>
</body>
</html>