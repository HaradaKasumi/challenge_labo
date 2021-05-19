<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>cloneを使ったコピー - honkaku</title>
</head>
<body>
<pre>
<?php
    class Task
    {
        public $name;
    }

    function changeTask(Task $task)
    {
        $task->name = '散歩';
    }

    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task2 = clone $task1;
    $task2->name = '買い物';

    // 「パスポートの更新」が出力される
    echo $task1->name, PHP_EOL; 

    changeTask(clone $task2);

    // 「パスポートの更新」が出力される
    echo $task1->name, PHP_EOL;

    // 「買い物」が出力される
    echo $task2->name, PHP_EOL;
?>
</pre>
</body>
</html>
