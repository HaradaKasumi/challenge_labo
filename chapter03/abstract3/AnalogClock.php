<?php

declare(strict_types=1); 

require_once dirname(__FILE__) . '/Clock.php';

class AnalogClock extends Clock
{
    // Clockクラスの抽象メソッドshow()は、サブクラスで必ず実装する
    public function show(): string
    {
        // 長針は1分間で6℃回る。短針は1分間で0.5℃回る。
        // このルールを元に計算し、長針と短針の角度を返す。
        // ここでは固定値とします。
        $minuteHand = 90; // 長針は90℃
        $hourHand = 157.5; // 短針は157.5℃
        return "長針：{$minuteHand}℃　短針：{$hourHand}℃";
    }
}
