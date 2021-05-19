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
    $log = <<< LOG
■2019-01-01 12:34:56 [ERROR] 画像ファイルが見つかりません。
■2019-01-02 12:34:56 [INFO] ユーザがログインしました。

LOG;
    file_put_contents('files/log.txt', $log);

    $log = <<< LOG
■2019-01-03 12:34:56 [INFO] フリーワード検索されました。
■2019-01-04 12:34:56 [INFO] PDFファイルがアップロードされました。

LOG;
    file_put_contents('files/log.txt', $log, FILE_APPEND);

    echo '●log.txtの内容は以下の通りです。', PHP_EOL;
    readfile('files/log.txt');
?>
</pre>
</body>
</html>