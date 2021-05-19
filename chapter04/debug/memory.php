<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>メモリ情報 - honkaku</title>
</head>
<body>
<pre>
<?php

    // 何も処理していないので、メモリ使用量は小さいはず。
    echo '現在のメモリ使用量(1回目)：', memory_get_usage(), PHP_EOL;

    // $listに10000要素入れる。これで少しメモリ使用量が増える。
    $list = [];
    for ($i = 0; $i < 10000; $i++) {
        $list[] = $i;
    }
    echo '現在のメモリ使用量(2回目)：', memory_get_usage(), PHP_EOL;

    // $listを空にする。これでメモリ使用量が元に戻るはず。
    $list = null;
    echo '現在のメモリ使用量(3回目)：', memory_get_usage(), PHP_EOL;

    // $listに、前回より少なめの2000要素を入れる。
    // 2回目の出力よりは小さくなるはず。
    $list = [];
    for ($i = 0; $i < 2000; $i++) {
        $list[] = $i;
    }
    echo '現在のメモリ使用量(4回目)：', memory_get_usage(), PHP_EOL;

    // 最大メモリ使用量は、$listに10000要素入っていた2回目の出力くらいになるはず。
    echo 'メモリの最大使用量：', memory_get_peak_usage(), PHP_EOL;
?>
</pre>
</body>
</html>
