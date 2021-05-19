<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Clock.php';

class DigitalClock extends Clock
{
    // 文字色
    private $color;

    // 時間をセットする(オーバーライド)
    public function setTime(int $time): void
    {
        if (date('H', $time) >= 6 && date('H', $time) <= 21) {
            // 6時～21時であれば文字色は「白」
            $this->color = 'white';
        } else {
            // それ以外の時間帯であれば文字色は「青」
            $this->color = 'blue';
        }
        $this->time = $time;
    }

    // 文字色を取得する
    public function getColor(): string
    {
        return $this->color;
    }

    // 時間を示す
    public function show(): string
    {
        return date('H:i', $this->time);
    }
}
