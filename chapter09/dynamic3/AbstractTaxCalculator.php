<?php

declare(strict_types=1);

// 消費税計算クラスのための抽象クラス
abstract class AbstractTaxCalculator
{
    abstract public function calculate(int $price);

    protected function addTax(int $price, float $tax): float
    {
        return round($price * (1 + $tax));
    }
}
