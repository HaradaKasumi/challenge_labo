<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>インスタンスを別のクラスに渡す - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Task.php';
    require_once dirname(__FILE__) . '/TaskSheet.php';

    $taskSheet = new TaskSheet();

    // TODOタスク「パスポートの更新」を作る
    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task1->progress = 100;
    $taskSheet->addTask($task1);

    // TODOタスク「食材の買い出し」を作る
    $task2 = new Task();
    $task2->name = '食材の買い出し';
    $task2->progress = 50;
    $taskSheet->addTask($task2);

    // タスクリストを表示する
    echo PHP_EOL, '●タスクリストを表示します...', PHP_EOL;
    $taskSheet->show();
?>
</pre>
</body>
</html>
