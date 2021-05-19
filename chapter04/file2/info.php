<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルのメタデータを取得する - honkaku</title>
</head>
<body>
<pre>
<?php
    $file = new SplFileObject('./files/flower.png');
    echo '最終アクセス日時(getATime)：', date('Y-m-d H:i:s', $file->getATime()), PHP_EOL;
    echo '作成日時(getCTime)：', date('Y-m-d H:i:s', $file->getCTime()), PHP_EOL;
    echo 'ベース名(getBasename)：', $file->getBasename(), PHP_EOL;
    echo '拡張子(getExtension)：', $file->getExtension(), PHP_EOL;
    echo 'ファイル名(getFilename)：', $file->getFilename(), PHP_EOL;
    echo 'ファイルへのパス(getPath)：', $file->getPath(), PHP_EOL;
    echo '読込時のパス名(getPathName)：', $file->getPathName(), PHP_EOL;
    echo '絶対パス(getRealPath)：', $file->getRealPath(), PHP_EOL;
    echo 'サイズ(getSize)：', $file->getSize(), PHP_EOL;
    echo '種別(getType)：', $file->getType(), PHP_EOL;
    echo '読み取り可能か？(isReadable)：', $file->isReadable(), PHP_EOL;
    echo '書き込み可能か？(isWritable)：', $file->isWritable(), PHP_EOL;
    $file = null;
?>
</pre>
</body>
</html>