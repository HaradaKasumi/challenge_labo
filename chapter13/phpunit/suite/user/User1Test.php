<?php

require_once dirname(__FILE__) . '/../../../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class User1Test extends TestCase
{
    public function test1()
    {
        $this->assertEquals(1, 1);
    }

    public function test2()
    {
        $this->assertEquals(1, 1);
    }
}
