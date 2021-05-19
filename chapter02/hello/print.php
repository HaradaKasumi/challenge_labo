<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>さまざまな出力 - honkaku</title>
</head>
<body>
    <?php $total = 500 * 1.08 ?>
    <p>税込金額は<?php echo $total; ?>円です。</p>
    <p>税込金額は<?php print $total; ?>円です。</p>
    <p>税込金額は<?=$total?>円です。</p>
    <p><?php echo '税込金額は', $total, '円です。'?></p>
    <p><?php print '税込金額は' . $total . '円です。'?></p>
    <p><?='税込金額は', $total, '円です。'?></p>
</body>
</html>
