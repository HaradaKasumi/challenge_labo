<?php

declare(strict_types=1); 

// 何らかのトレイトA
trait SomeTraitA
{
    // プロパティ
    private $traitProperty;

    // メソッド
    public function traitMethod($args1, $args2)
    {
        $this->traitProperty = 'A';
    }
}
