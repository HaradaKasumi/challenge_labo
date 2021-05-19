<?php

declare(strict_types=1);

// 商品を表すクラス
class Item
{
    // 商品名
    private $name;

    // 価格
    private $price;

    // 商品No
    private $itemNumber;

    // コンストラクタ
    public function __construct(string $itemNumber, string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->itemNumber = $itemNumber;
    }

    // 商品Noを返す
    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }

    // echoやprint命令による出力時に呼ばれるマジックメソッド
    public function __toString()
    {
        return $this->name . '(' . $this->price . ' yen)';
    }
}
