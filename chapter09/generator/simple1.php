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
        yield 1;
        yield 2;
        yield 3;
        yield 4;
        // このコメントアウトを外すと1～4のみが返ります。
        // return;
        yield 5;
    }

    // メインルーチン
    foreach (numbers() as $number) {
        echo $number, PHP_EOL;
    }
?>
</pre>
</body>
</html>