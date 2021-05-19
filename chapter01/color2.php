<?php $colors = ['赤', '青', '黄', '白', '黒']; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ラッキーカラー占い</title>
</head>
<body>
    <h1>本日、<?=date('Y年m月d日')?>のラッキーカラー</h1>
    <p>今日のラッキーカラーは「<?=$colors[random_int(0, 4)]?>」です！</p>
    <p>今日のラッキーカラーは「<?=$colors[random_int(0, 4)]?>」です！</p>
</body>
</html>
