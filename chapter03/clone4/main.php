<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>インスタンスの比較 - honkaku</title>
</head>
<body>
<pre>
<?php
    // タスク
    class Task
    {
        // タスク名
        public $name;
    }

    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task2 = $task1;
    $task3 = clone $task1;

    var_dump($task1 == $task2); // 出力結果「true」
    var_dump($task1 === $task2); // 出力結果「true」

    var_dump($task1 == $task3); // 出力結果「true」
    var_dump($task1 === $task3); // 出力結果「false」
?>
</pre>
</body>
</html>
