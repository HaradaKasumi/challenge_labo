<?php

declare(strict_types=1);

// ショッピングカートを表すクラス。
// Itemインスタンスの配列をプロパティとして持つ。
class ShoppingCart implements IteratorAggregate
{
    private $items = [];

    // 商品を追加します。
    public function addItem(Item $item): void
    {
        $this->items[$item->getItemNumber()] = $item;
    }

    // foreachループの時に内部的にコールされる、Traversable型を返すメソッド。
    // このメソッドはインターフェースIteratorAggregateに定義されています。
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);

        // ジェネレーターを使って、上のreturn文を以下のようにも書けます。
        // foreach ($this->items as $itemNumber => $item) {
        //     yield $itemNumber => $item;
        // }
    }
}