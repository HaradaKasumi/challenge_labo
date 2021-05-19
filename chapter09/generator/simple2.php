<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ジェネレーターのシンプルな例 - honkaku</title>
</head>
<body>
<pre>
<?php
    // ジェネレーター
    function numbers()
    {
        for ($i = 1; $i <= 5; $i++) {
            yield $i;
        }
        for ($i = 6; $i <= 10; $i++) {
            yield $i;
        }
    }

    // メインルーチン
    foreach (numbers() as $number) {
        echo $number, PHP_EOL;
    }
?>
</pre>
</body>
</html>