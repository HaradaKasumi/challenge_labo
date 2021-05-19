<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>浮動小数点数の計算 - honkaku</title>
</head>
<body>
<pre>
<?php

    // 加算する
    echo bcadd('0.123', '0.234', 3), PHP_EOL;   // 結果：0.357
    echo bcadd('0.123', '0.234', 5), PHP_EOL;   // 結果：0.35700

    // べき乗する
    echo bcpow('1.2', '3', 3), PHP_EOL;         // 結果：1.728

    // 平方根を求める
    echo bcsqrt('2', 10), PHP_EOL;              // 結果：1.4142135623

    // 2つの値を比較する
    echo bccomp('0.12345', '0.12346', 3), PHP_EOL;       // 結果：0(等しい)
    echo bccomp('0.12345', '0.12346', 4), PHP_EOL;       // 結果：0(等しい)
    echo bccomp('0.12345', '0.12346', 5), PHP_EOL;       // 結果：-1(左オペランドの方が小さい)
?>
</pre>
</body>
</html>