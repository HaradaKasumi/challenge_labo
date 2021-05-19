<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>メソッドチェーン - honkaku</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__) . '/Calculator.php';

        $result = Calculator::newInstance(10)   // 初期値は10
            ->divide(2)                         // 2で割る(結果：5)
            ->multiply(20)                      // 20を掛ける(結果：100)
            ->subtract(15)                      // 15を引く(結果：85)
            ->add(5)                            // 5を足す(結果：90)
            ->getResult();                      // 計算結果を得る

        echo '計算結果：', $result;

        // 条件分岐で計算を切り替えたい時などは、以下のようにステップを分けて計算させることもできます。
        // $calculator = Calculator::newInstance(10);
        // $calculator->divide(2);
        // $calculator->multiply(20);
        // $calculator->subtract(15);
        // $calculator->add(5);
        // echo $calculator->getResult();
    ?>
</body>
</html>