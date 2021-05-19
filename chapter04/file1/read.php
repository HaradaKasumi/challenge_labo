<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルの読み込み - honkaku</title>
</head>
<body>
<pre>
<?php
    echo '●file関数でファイルを読み込みます。', PHP_EOL;
    $lines = file('files/note.txt');
    foreach ($lines as $line) {
        echo trim($line), PHP_EOL;
    }

    echo '●file_get_contents関数でファイルを読み込みます。', PHP_EOL;
    $contents = file_get_contents('files/note.txt');
    echo $contents, PHP_EOL;

    echo '●readfile関数でファイルを読み込みます。', PHP_EOL;
    readfile('files/note.txt');
?>
</pre>
</body>
</html>