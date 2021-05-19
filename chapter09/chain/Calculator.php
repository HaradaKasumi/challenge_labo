<?php

declare(strict_types=1);

// 四則演算を行うクラス
class Calculator
{
    // 最新の計算結果
    private $result;

    // Calculatorインスタンスを取得する。
    // 引数$startValueには演算前の初期値を入れる。
    public static function newInstance(int $startValue): Calculator
    {
        return new Calculator($startValue);
    }

    // コンストラクタ。newInstanceメソッド経由でしか呼べないよう、privateとする。
    private function __construct(int $startValue)
    {
        $this->result = $startValue;
    }

    // 足し算する
    public function add(int $value): Calculator
    {
        $this->result += $value;
        return $this;
    }

    // 引き算する
    public function subtract(int $value): Calculator
    {
        $this->result -= $value;
        return $this;
    }

    // 掛け算する
    public function multiply(int $value): Calculator
    {
        $this->result *= $value;
        return $this;
    }

    // 割り算する
    public function divide(int $value): Calculator
    {
        $this->result /= $value;
        return $this;
    }

    // 最終的な計算結果を返す
    public function getResult(): int
    {
        return $this->result;
    }
}
