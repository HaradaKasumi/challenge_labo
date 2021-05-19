<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>連想配列のようにアクセスできるクラス - honkaku</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__) . '/ShoppingCart.php';
        require_once dirname(__FILE__) . '/Item.php';

        // ArrayAccessを実装していることで、連想配列のように値をセットできます。
        $cart = new ShoppingCart();
        $cart['ABC-12345'] = new Item('ABC-12345', 'タッチペン 極細', 2500);
        $cart['XYZ-98765'] = new Item('XYZ-98765', 'マウスパッド グレー', 980);
        $cart['YTR-76543'] = new Item('YTR-76543', 'ノートPCスタンド', 3000);
    ?>
    <h4>カートの商品一覧</h4>
    <?php /* ArrayAccessを実装していることで、連想配列のように値を取得できます。 */ ?>
    <p><?=$cart['ABC-12345']?></p>
    <p><?=$cart['XYZ-98765']?></p>
    <p><?=$cart['YTR-76543']?></p>
</body>
</html>