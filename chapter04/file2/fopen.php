<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルを1行ずつ読み込む(クラス不使用) - honkaku</title>
</head>
<body>
<pre>
<?php
    $handle = fopen('files/sample.txt', 'r');
    while ($line = fgets($handle)) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        echo $line, PHP_EOL;
    }
    fclose($handle);
?>
</pre>
</body>
</html>