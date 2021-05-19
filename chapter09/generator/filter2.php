<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ジェネレーターにフィルタ処理を委ねる - honkaku</title>
</head>
<body>
<pre>
<?php
    // 条件に適合する画像ファイルのみを返すジェネレーター。
    // 引数$lowerSizeには、ファイルサイズの下限値をバイト単位で指定してください。
    function images(string $dirName, int $lowerSize)
    {
        $files = new DirectoryIterator($dirName);
        foreach ($files as $file) {
            // ファイルが通常のファイルではない(ディレクトリ名やシンボリックリンクである)場合は処理をスキップ
            if (!$file->isFile()) {
                continue;
            }
            // ファイルが画像ファイル以外の場合は処理をスキップ
            if (!in_array($file->getExtension(), ['jpg', 'jpeg', 'gif', 'png', 'svg', 'bmp'])) {
                continue;
            }
            // ファイルが1MB未満の場合は処理をスキップ
            if ($file->getSize() < $lowerSize) {
                continue;
            }
            // スキップされなかった画像ファイルのみを対象にyieldする
            yield $file->getFilename();
        }
    }

    // メインルーチン
    foreach (images(dirname(__FILE__) . '/uploaded', 1 * 1024 * 1024) as $image) {
        echo $image, 'をリサイズ処理しました。', PHP_EOL;
    }
?>
</pre>
</body>
</html>