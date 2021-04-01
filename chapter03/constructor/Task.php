<?php

declare(strict_types=1);

class Task
{
    // タスク名
    public $name;

    // 優先度
    public $priority;

    // 進行度
    public $progress;

    // コンストラクタ
    public function __construct(string $name, int $priority =1, int $progress = 0)
    {
        $this->name = $name;
        $this->priority = $priority; // 優先度：中
        $this->progress = $progress;
    }
}
