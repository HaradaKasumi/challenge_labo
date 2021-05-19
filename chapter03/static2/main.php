<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>静的プロパティ - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/ShoppingPoint.php';

    // 曜日ポイントクラス
    class WeekdaysPoint
    {
        // 金曜日なら、1追加
        public function FridayOption($date)
        {
            if ($date === 'fri'){
                $total = ShoppingPoint::count_total_point();
            }
            return $total;
        }

    }
    // 1000円以上で50ポイント追加
    function addPricePoint(int $sum):int
    {
        if($sum >= 1000){
            $total = ShoppingPoint::count_total_point();
        }
        return $total;
    }
    // 初期ポイントはゼロ
    // ShoppingPoint::$total_point = 0;

    // 購入しただけで、無条件に1ポイント追加

    // 金曜日によって1ポイント加算
    $weekdays_point = new WeekdaysPoint();
    $result = $weekdays_point->FridayOption('fri');
    echo $result;


?>
</body>
</html>
