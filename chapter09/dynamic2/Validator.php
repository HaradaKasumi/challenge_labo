<?php

declare(strict_types=1);

// 商品データの妥当性チェック(バリデーション)を行うクラス
class Validator
{

    // 商品Noをチェックするメソッド。
    // 商品Noが『大文字英字3桁-数字4桁』の形式であれば真を返します。
    public function checkItemNumber(string $value): bool
    {
        return preg_match('/^[A-Z]{3}\-[0-9]{4}$/', $value) > 0;
    }

    // 金額をチェックするメソッド。
    // 金額が正の整数であれば真を返します。
    public function checkPrice($value): bool
    {
        return is_int($value) && intval($value) > 0;
    }
}
