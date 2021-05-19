<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>パターン文字列によるファイル・ディレクトリの検索 - honkaku</title>
</head>
<body>
<pre>
<?php
    $files = glob('files/user-images/user1234-*.{jpg,jpeg,gif,png}', GLOB_BRACE);
    print_r($files);
?>
</pre>
</body>
</html>