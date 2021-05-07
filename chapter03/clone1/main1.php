<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>変数の実験</title>
</head>
<body>
<pre>
<?php
    class Task
    {
        public $name;
    }

    function changeTask(Task $task): void
    {
        $task->name = 'チェンジタスク';
    }

    $task1 = new Task();
    $task1->name = 'タスク1のタスク';

    $task2 = $task1;
    $task2->name = '書き換え';

    // 「書き換え」が出力される
    echo $task1->name, PHP_EOL;

    changeTask($task2);

    // 「チェンジタスク」が出力される
    echo $task1->name, PHP_EOL;
    echo $task2->name, PHP_EOL;
?>
</pre>
</body>
</html>
