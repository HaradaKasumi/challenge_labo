<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>最小値・最大値 - honkaku</title>
</head>
<body>
<pre>
<?php
    $numbers = [80, 24, 100, 34, 62];
    echo '最小値：', min($numbers), PHP_EOL;
    echo '最大値：', max($numbers), PHP_EOL;
?>
</pre>
</body>
</html>