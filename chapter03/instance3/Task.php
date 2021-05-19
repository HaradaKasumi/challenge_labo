<?php

declare(strict_types=1); 

// タスククラス
class Task
{
    // タスク名
    public $name;

    // 優先度
    public $priority;

    // 進行度
    public $progress;

    // タスク名を表示するメソッド
    public function showTaskName(): string
    {
        if ($this->progress >= 100) {
            return '<b>' . $this->name . '</b>';
        } else {
            return $this->name;
        }
    }
}
