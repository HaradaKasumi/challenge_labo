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

    // タスクが完了したかを取得するメソッド
    public function isCompleted(): bool
    {
        return $this->progress >= 100; // $progressが100以上なら真を返す
    }

    public function set_name()
    {
        $this->name = 'パスポート更新';
    }

    public function get_name()
    {
        return $this->name;
    }
}
