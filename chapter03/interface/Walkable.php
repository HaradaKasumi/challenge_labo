<?php

declare(strict_types=1); 

// 歩けるものインターフェース
interface Walkable
{
    // 歩くアニメーションをするメソッド
    public function walk(): void;
}
