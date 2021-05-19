<?php

declare(strict_types=1); 

require_once dirname(__FILE__) . '/Address.php';

// 顧客データクラス
class Customer
{
    // 顧客の氏名を表す、文字列型の普通の変数(cloneされる)
    public $name;

    // 住所を表す、Addressクラス型の変数(cloneされない)
    public $address;

    // コンストラクタ
    public function __construct(string $name, Address $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // 氏名を変更する
    public function changeName(string $name): void
    {
        $this->name = $name;
    }

    // 住所を変更する
    public function changeAddress(string $prefecture, string $city): void
    {
        $this->address->prefecture = $prefecture;
        $this->address->city = $city;
    }
}
