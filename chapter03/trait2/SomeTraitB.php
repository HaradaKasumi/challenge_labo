<?php

declare(strict_types=1); 

// 何らかのトレイトB
trait SomeTraitB
{
    // プロパティ
    private $traitProperty; // 初期値が代入されていない場合は、同名のプロパティでもエラーにならない

    // メソッド
    public function traitMethod($args1, $args2) // 別のトレイト同士で同じメソッド名はエラー
    {
        $this->traitProperty = 'B';
    }
}
