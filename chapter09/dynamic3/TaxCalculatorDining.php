<?php

declare(strict_types=1); 

require_once dirname(__FILE__) . '/AbstractTaxCalculator.php';

// イートインするお弁当の税込金額計算クラス
class TaxCalculatorDining extends AbstractTaxCalculator
{
    // テイクアウト時は税率10%
    private const TAX = 0.1;

    public function calculate(int $price): float
    {
        return $this->addTax($price, self::TAX);
    }
}
