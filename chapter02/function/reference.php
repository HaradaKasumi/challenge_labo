<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>引数の参照渡し - honkaku</title>
</head>
<body>
<pre>
<?php
    /* 正の整数であれば真、そうでなければ偽を返す関数 */
    function checkNumber($value)
    {
        return is_numeric($value) && (int)$value > 0;
    }

    /* 2つの数値を足し算して返す関数 */
    function add($a, $b, &$errorMessage)
    {
        if (!checkNumber($a)) {
            $a = 0;
            $errorMessage = '(※エラー：1番目の引数が正の整数ではありません。)';
        }
        if (!checkNumber($b)) {
            $b = 0;
            $errorMessage = '(※エラー：2番目の引数が正の整数ではありません。)';
        }
        $total = $a + $b;
        return $total;
    }

    // メインルーチン
    $errorMessage = null;
    $result = add(3, 10, $errorMessage);
    echo '計算結果：', $result, $errorMessage, PHP_EOL;

    $errorMessage = null;
    $result = add(4, -5, $errorMessage);
    echo '計算結果：', $result, $errorMessage, PHP_EOL;
?>
</pre>
</body>
</html>
