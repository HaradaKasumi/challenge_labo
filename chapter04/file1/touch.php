<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルのタッチ - honkaku</title>
</head>
<body>
<pre>
<?php
    define('LOCK_FILE', 'files/lock');

    if (file_exists(LOCK_FILE)) {
        unlink(LOCK_FILE);
    }

    echo '●現在日時：', date('Y-m-d H:i:s'),  PHP_EOL;

    echo '●ファイル「lock」を作成します。', PHP_EOL;
    touch(LOCK_FILE);

    echo '●ファイル「lock」の更新日時を3時間後に、アクセス日時を5時間後に変更します。', PHP_EOL;
    touch(LOCK_FILE, time() + 60 * 60 * 3, time() + 60 * 60 * 5);

    echo '作成日時：', date('Y-m-d H:i:s', filectime(LOCK_FILE)), PHP_EOL;
    echo '最終更新日時：', date('Y-m-d H:i:s', filemtime(LOCK_FILE)), PHP_EOL;
    echo '最終アクセス日時：', date('Y-m-d H:i:s', fileatime(LOCK_FILE)), PHP_EOL;
?>
</pre>
</body>
</html>