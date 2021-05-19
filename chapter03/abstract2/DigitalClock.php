<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Clock.php';

class DigitalClock extends Clock
{
    // Clockクラスの抽象メソッドshow()は、サブクラスで必ず実装する
    public function show(): string
    {
        return date('H:i', $this->time);
    }
}
