<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>比較結果により値を選ぶ - honkaku</title>
</head>
<body>
<pre>
<?php
    /* 三項演算子をもちいた例(1) */
    $greeting = null;
    $message = $greeting === null ? 'Hello' : $greeting;
    echo 'あいさつは', $message, PHP_EOL;

    /* 三項演算子をもちいた例(2) */
    $greeting = 'Good Morning';
    $message = $greeting === null ? 'Hello' : $greeting;
    echo 'あいさつは', $message, PHP_EOL;

    /* null合体演算子をもちいた例(1) */
    $greeting = null;
    $message = $greeting ?? 'Hello';
    echo 'あいさつは', $message, PHP_EOL;

    /* null合体演算子をもちいた例(2) */
    $greeting = 'Good Morning';
    $message = $greeting ?? 'Hello';
    echo 'あいさつは', $message, PHP_EOL;
?>
</pre>
</body>
</html>