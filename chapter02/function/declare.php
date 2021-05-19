<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>型宣言 - honkaku</title>
</head>
<body>
<pre>
<?php
    /* 2つの数値を足し算して出力する関数 */
    function add(int $a, int $b, ?string &$errorMessage): int
    {
        // 以下のコメントアウトを外すとエラーになります。
        // return 'abc';

        if ($a <= 0 || $b <= 0) {
            $errorMessage = '(※エラー：正の整数を指定してください。)';
        }

        $total = $a + $b;
        return $total;
    }

    // メインルーチン
    $errorMessage = null;
    $result = add(3, 10, $errorMessage);
    echo '計算結果：', $result, $errorMessage, PHP_EOL;

    $errorMessage = null;
    $result = add(3, -4, $errorMessage);
    echo '計算結果：', $result, $errorMessage, PHP_EOL;

    // 以下のコメントアウトを外すとエラーになります。
    // $errorMessage = null;
    // $result = add('3', 10, $errorMessage);

    // 以下のコメントアウトを外すとエラーになります。
    // $errorMessage = null;
    // $result = add(true, 10, $errorMessage);
?>
</pre>
</body>
</html>
