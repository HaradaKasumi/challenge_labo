<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';

// タスク用紙クラス
class TaskSheet
{
    // タスクの配列
    public $taskSheet;

    // タスクを追加するメソッド。引数にタスククラス
    public function addTask(Task $task)
    {
        $taskSheet = $task;
        return $taskSheet;
        echo $taskSheet;

    }
    // タスクリストを表示するメソッド

}
