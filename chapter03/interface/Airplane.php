<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Flyable.php';

class Airplane implements Flyable
{
    public function fly() :void
    {
        // 飛行機特有の実装
        echo 'airplane is flying';
    }
}
