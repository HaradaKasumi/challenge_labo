<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ループ可能なクラス - honkaku</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__) . '/ShoppingCart.php';
        require_once dirname(__FILE__) . '/Item.php';

        $cart = new ShoppingCart();
        $cart->addItem(new Item('ABC-12345', 'タッチペン 極細', 2500));
        $cart->addItem(new Item('XYZ-98765', 'マウスパッド グレー', 980));
        $cart->addItem(new Item('YTR-76543', 'ノートPCスタンド', 3000));
    ?>

    <h4>カートの商品一覧</h4>
    <?php /* IteratorAggregateを実装していることで、ループ処理ができるようになります */ ?>
    <?php foreach ($cart as $itemNumber => $item) : ?>
        <p><?=$itemNumber?>：<?=$item?></p>
    <?php endforeach;?>
</body>
</html>