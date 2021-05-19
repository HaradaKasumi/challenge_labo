<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>instanceof - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/TaskSheet.php';
    require_once dirname(__FILE__) . '/Task.php';
    require_once dirname(__FILE__) . '/Schedule.php';

    $taskSheet = new TaskSheet();

    $task = new Task();
    $task->name = 'パスポートの更新';
    $taskSheet->addTask($task);

    $schedule = new Schedule();
    $schedule->name = '今週の金曜日14:00に打ち合わせ';
    $taskSheet->addTask($schedule);
?>
</pre>
</body>
</html>