<?php
declare(strict_types=1);

// タスククラス
class Task
{
    // 名前 string
    public $name;
    // 優先度 int
    public $priority;
    // 進捗 int
    public $progress;

    // タスクが完了したかを取得
    public function isCompleted():bool
    {
        return $this->progress >=100;
    }

}
