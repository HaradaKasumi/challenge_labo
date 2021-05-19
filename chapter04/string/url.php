<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>URLエンコード - honkaku</title>
</head>
<body>
<pre>
<?php
    // URL上問題ない文字列
    echo '●「TestString」をURLエンコードします。', PHP_EOL;
    $encoded = urlencode('TestString');
    echo $encoded, PHP_EOL;
    $decoded = urldecode($encoded);
    echo $decoded, PHP_EOL;

    // 日本語はURLに含めることができません
    echo '●「東京都杉並区」をURLエンコードします。', PHP_EOL;
    $encoded = urlencode('東京都杉並区');
    echo $encoded, PHP_EOL;
    $decoded = urldecode($encoded);
    echo $decoded, PHP_EOL;

    // 一部の半角記号もURLに含めることができません
    echo '●「Mark Of !?(^^)」をURLエンコードします。', PHP_EOL;
    $encoded = urlencode('Mark Of !?(^^)');
    echo $encoded, PHP_EOL;
    $decoded = urldecode($encoded);
    echo $decoded, PHP_EOL;
?>
</pre>
</body>
</html>