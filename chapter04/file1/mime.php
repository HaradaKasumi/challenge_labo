<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MIMEタイプの取得 - honkaku</title>
</head>
<body>
<pre>
<?php
    $finfo = finfo_open(FILEINFO_MIME_TYPE);

    // PNG画像ファイルのMIMEタイプを取得する
    echo finfo_file($finfo, 'files/flower.png'), PHP_EOL;   // 結果：image/png

    // 本当はテキスト形式なのに、拡張子がpdfに偽装されているファイルのMIMEタイプを取得する
    echo finfo_file($finfo, 'files/dummy.pdf'), PHP_EOL;    // 結果：text/plain

    finfo_close($finfo);
?>
</pre>
</body>
</html>
