<?php
declare(strict_types=1);

/**
 * phpmdテスト用クラス
 */
class SomeClass
{
    /**
     * プロパティ1
     */
    private $something1;

    /**
     * プロパティ2
     */
    private $something2;

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $profiles = [
            'name' => 'Tarou',
            'age'  => 29,
            'pref' => 'Tokyo',
            'name' => 'Tanaka' // nameキーが2回出ている
        ]
        $this->something1 = 'something1';
        $this->samuthing2 = 'something2'; // タイプミス
        $this->doConditional();
        $this->doComplex('a');
    }

    /**
     * 条件分岐を持つメソッド
     */
    public function doConditional(): int
    {
        if ($nothing) { // 定義されていない変数を使う
            return 1;
        }
        return 0;
    }

    /**
     * 複雑なメソッド
     */
    public function doComplex($arg): int
    {
        $sum = 0;
        if ($argu === 1) { // タイプミス
            $sum++;
        }
        if (1 === 1) {
            $sum++;
        }
        if (1 === 1) {
            $sum++;
        }
        if (1 === 1) {
            $sum++;
        }
        if (1 === 1) {
            $sum++;
        }
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                if (1 === 1) {
                    if (2 === 2) {
                        $sum++;
                    }
                }
            }
        }
        return $sam; // タイプミス
    }
}
