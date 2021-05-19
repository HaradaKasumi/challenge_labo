<?php

declare(strict_types=1); 

require_once dirname(__FILE__) . '/Swimmable.php';
require_once dirname(__FILE__) . '/Walkable.php';

// 人間クラス
class Human implements Swimmable, Walkable
{
    // 泳ぐメソッド
    public function swim(): void
    {
        // 人間固有の、泳ぐアニメーション処理を記述する
        echo 'Human is swimming..';
    }

    // 歩くメソッド
    public function walk(): void
    {
        // 人間固有の、歩くアニメーション処理を記述する
        echo 'Human is walking..';
    }

}
