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
    $task->set_name('パスポートの更新');
    $task->set_progress(10);

    var_dump($task->get_name()); // string(24) "パスポートの更新"
    var_dump($task->name);

    if ($task->isCompleted() === TRUE){
        echo $task->get_name().'はタスク完了';
    }else {
        echo $task->get_name().'の達成率は'.$task->get_progress().'%';
    }
    echo "<br />";

    //タスク2を作成。同じクラスを使って別のタスク作成
    $task2 = new Task();
    $task2->set_name('買い物');
    $task2->set_progress(50);

    if ($task2->isCompleted() === TRUE){
        echo $task2->get_name().'はタスク完了';
    } else {
        echo $task2->get_name().'の達成率は'.$task2->get_progress().'%';
    }

?>
</pre>
</body>
</html>
