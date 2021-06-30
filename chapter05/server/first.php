<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>$_SERVER - honkaku</title>
</head>
<body>
    <h3>以下のリンクをクリックすると、次の画面に移動します。</h3>
    <a href="second.php/some-key/some-value?date=<?=date('Y-m-d')?>&time=<?=date('H:i:s')?>">クリック</a>
</body>
</html>
