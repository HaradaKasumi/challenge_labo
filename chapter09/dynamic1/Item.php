<?php

declare(strict_types=1);

// 商品クラス
class Item
{
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // 商品名
    public $name;

    // 金額
    public $price;
}
