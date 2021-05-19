<?php

declare(strict_types=1); 

// 住所クラス
class Address
{
    // 都道府県
    public $prefecture;

    // 市区町村
    public $city;

    // コンストラクタ
    public function __construct(string $prefecture, string $city)
    {
        $this->prefecture = $prefecture;
        $this->city = $city;
    }
}
