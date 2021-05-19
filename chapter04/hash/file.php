<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルの内容にもとづくハッシュ値の生成 - honkaku</title>
</head>
<body>
<pre>
<?php
    echo 'flower1.pngのmd5ハッシュ値', hash_file('md5', 'files/flower1.png'), PHP_EOL;
    echo 'flower2.pngのmd5ハッシュ値', hash_file('md5', 'files/flower2.png'), PHP_EOL;
    echo 'flower3.pngのmd5ハッシュ値', hash_file('md5', 'files/flower3.png'), PHP_EOL;

    echo 'flower1.pngのsha256ハッシュ値', hash_file('sha256', 'files/flower1.png'), PHP_EOL;
    echo 'flower2.pngのsha256ハッシュ値', hash_file('sha256', 'files/flower2.png'), PHP_EOL;
    echo 'flower3.pngのsha256ハッシュ値', hash_file('sha256', 'files/flower3.png'), PHP_EOL;
?>
</pre>
</body>
</html>