<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クラスの動的呼び出し - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/TaxCalculatorTakeOut.php';
    require_once dirname(__FILE__) . '/TaxCalculatorDining.php';

    // お弁当の注文データ
    $orders = [
        [
            'name'      => '唐揚げ弁当',
            'price'     => 800,
            'type'      => 'Dining'     // 内食
        ],
        [
            'name'      => 'お好み焼き弁当',
            'price'     => 500,
            'type'      => 'TakeOut'    // テイクアウト
        ],
        [
            'name'      => '唐揚げ弁当',
            'price'     => 800,
            'type'      => 'TakeOut'    // テイクアウト
        ],
    ];

    foreach ($orders as $order) {
        $taxClassName = 'TaxCalculator' . $order['type'];
        if (!class_exists($taxClassName)) {
            continue;
        }
        $taxInstance = new $taxClassName();
        echo $order['name'], '(', $order['type'], ')の税込金額：', $taxInstance->calculate($order['price']), '円', PHP_EOL;
    }
?>
</pre>
</body>
</html>