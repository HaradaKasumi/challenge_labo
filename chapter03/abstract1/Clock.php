<?php

declare(strict_types=1);

abstract class Clock
{
    protected $time;

    // 時間を示す
    abstract public function show(): string;

    // 時間をセット
    public function setTime($time): void
    {
        $this->time = $time;
    }

    // 時間を取得
    public function getTime(): string
    {
        return $this->time;
    }

}
