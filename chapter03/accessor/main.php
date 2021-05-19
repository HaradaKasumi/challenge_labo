<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>アクセサメソッド - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Task.php';
    $task = new Task();

    $task->setName('パスポートの更新');
    echo 'タスク名：', $task->getName(), PHP_EOL;

    // タスクの進行度を120%にする
    $task->setProgress(120);
    echo '進行度：', $task->getProgress(), PHP_EOL;

    // タスクの進行度を80%にした後、進行度を0に戻す
    $task->setProgress(80);
    $task->clearProgress();
    echo '進行度：', $task->getProgress(), PHP_EOL;

    // タスクを完了させる
    $task->completeProgress();
    echo '進行度：', $task->getProgress(), PHP_EOL;
?>
</pre>
</body>
</html>
