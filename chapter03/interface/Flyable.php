<?php

declare(strict_types=1);

// 飛べるものインターフェース
interface Flyable
{
    // 飛ぶアニメーションをするメソッド
    public function fly(): void;
}
