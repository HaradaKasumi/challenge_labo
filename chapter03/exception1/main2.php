<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>例外処理 - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/TaxCalculator.php';
    $calculator = new TaxCalculator();
    try {
        $priceWithTax = $calculator->calculate(100, -0.08);
        echo '金額は'.$priceWithTax;
    // エラーがあるとき
    }catch(Exception $e){
        echo '計算できない', $e->getMessage();
    // 必ず実行
    }finally{
        $calculator->reset();
    }
?>
</pre>
</body>
</html>
