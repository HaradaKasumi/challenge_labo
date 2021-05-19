<?php

declare(strict_types=1);

// ショッピングポイントクラス
class ShoppingPoint
{
    // 現在のトータルポイント
    public $total_point;//

    // トータルポイント+1する
    public static function count_total_point():int
    {
        // return self::$point++;
        return self::$total_point;
    }

}
