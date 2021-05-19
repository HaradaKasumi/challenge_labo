<?php
declare(strict_types=1); 

// タスククラス
class Task
{
    // タスク名
    public $name;

    // 優先度(0は低、1は中、2は高)
    public $priority;

    // 進行度(0～100で表す)
    public $progress;
}
