<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>オブジェクト定数を文字列で返す</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Task.php';

    $task = new Task();
    $task->priority = Task::PRIORITY_HIGH;
    echo $task->getPriorityAsString();

    // 静的メソッドを呼び出す
    echo Task::test();

?>
</body>
</html>
