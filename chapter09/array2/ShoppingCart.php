<?php

declare(strict_types=1);

// ショッピングカートを表すクラス。
// Itemインスタンスの配列をプロパティとして持つ。
class ShoppingCart implements IteratorAggregate, ArrayAccess
{
    private $items = [];

    // 以下の形式の命令が実行された時に自動的にコールされるメソッドです。
    // isset($cart[$offset]);
    // empty($cart[$offset]);
    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    // 以下の形式の命令が実行された時に自動的にコールされるメソッドです。
    // $cart[$offset] = $value;
    public function offsetSet($offset, $value): void
    {
        if (!$value instanceof Item) {
            throw new Exception('Itemインスタンスを指定してください。');
        }
        if (is_null($offset)) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    // 以下の形式の命令が実行された時に自動的にコールされるメソッドです。
    // unset($cart[$offset]); 
    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }

    // 以下の形式の命令が実行された時に自動的にコールされるメソッドです。
    // $cart[$offset]; 
    public function offsetGet($offset)
    {
        return isset($this->items[$offset]) ? $this->items[$offset] : null;
    }

    // イテレータを返すメソッド。
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
