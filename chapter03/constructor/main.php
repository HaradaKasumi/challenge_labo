<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>コンストラクタ - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Task.php';

    $task = new Task('パスポート');
    echo $task->name;
    echo $task->priority;
    echo $task->progress;
?>
</pre>
</body>
</html>
