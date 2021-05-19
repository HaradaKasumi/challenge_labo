<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ディレクトリの作成・削除 - honkaku</title>
</head>
<body>
<pre>
<?php
    echo '●new-dir1ディレクトリを作成します。', PHP_EOL;
    mkdir('files/new-dir1');

    echo '●new-dir2ディレクトリを作成します。', PHP_EOL;
    mkdir('files/new-dir2');

    echo '●new-dir1ディレクトリを削除します。', PHP_EOL;
    rmdir('files/new-dir1');
?>
</pre>
</body>
</html>