<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Clock.php';

class digitalClock extends Clock
{
    public function show(): string
    {
        // date(フォーマットの形, デフォルトはtime())
        return date('H:i', $this->time);
    }
}
