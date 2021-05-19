<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>数値のフォーマット - honkaku</title>
</head>
<body>
<pre>
<?php
    $money = 12345678.12345;
    echo number_format($money), PHP_EOL;
    echo number_format($money, 3), PHP_EOL;
?>
</pre>
</body>
</html>