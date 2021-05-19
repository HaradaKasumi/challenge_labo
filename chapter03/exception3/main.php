<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>例外処理 - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/ClassA.php';
    try {
        $classA = new ClassA();
        $classA->methodA();
    } catch (Exception $exception) {
        echo 'メインルーチンで例外をキャッチ。エラー内容：' , $exception->getMessage(), PHP_EOL;
    }
    echo 'Main routine completed.';
?>
</pre>
</body>
</html>