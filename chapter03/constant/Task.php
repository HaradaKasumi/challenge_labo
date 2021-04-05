<?php

declare(strict_types=1);

class Task
{
    // 優先度を表す定数
    public const PRIORITY_LOW = 0;
    public const PRIORITY_MIDDLE = 1;
    public const PRIORITY_HIGH = 2;


    // タスク名
    public $name;

    // 優先度
    public $priority;

    // 進行度
    public $progress;

    // 優先度を低～高の文字列で取得する
    public function getPriorityAsString() : string
    {
        switch ($this->priority)
        {
            case self::PRIORITY_LOW:
                return '低';
                break;
            case self::PRIORITY_MIDDLE:
                return '中';
                break;
            case self::PRIORITY_HIGH:
                return '高';
                break;
        }
    }

    public static function test(){
        return '静的メソッドで呼び出す';
    }
}
