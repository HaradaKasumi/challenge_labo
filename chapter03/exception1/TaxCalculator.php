<?php

declare(strict_types=1);

class TaxCalculator
{
    // 結果を保持するプロパティ
    private $lastCalculated;

    // 税額を計算する
    public function calculate(int $price, float $tax)
    {
        echo '計算開始';
        if ($tax < 0 ){
            throw new Exception('マイナスであってはいけません');
        }
        echo '計算終了';
        $this->lastCalculated = $calculated = $price + $price * $tax;
        return $calculated;
    }

    public function reset(){
        $this->lastCalculated = null;
        echo '計算結果をリセット';
    }
}
