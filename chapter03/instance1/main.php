<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>タスククラスへのアクセス - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Task.php';

    // タスク1を作成
    $task  = new Task();
    $task->name = 'パスポートの更新';
    // $task->priority = 0;
    $task->progress = 10;

    if ($task->isCompleted() === TRUE){
        echo $task->name.'はタスク完了';
    }else {
        echo $task->name.'の達成率は'.$task->progress.'%';
    }
    echo "<br />";

    //タスク2を作成。同じクラスを使って別のタスク作成
    $task2 = new Task();
    $task2->name = '買い物';
    // $task2->priority =1;
    $task2->progress = 80;

    if ($task2->isCompleted() === TRUE){
        echo $task->name.'はタスク完了';
    } else {
        echo $task2->name.'の達成率は'.$task2->progress.'%';
    }

?>
</pre>
</body>
</html>
