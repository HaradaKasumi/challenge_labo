<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>時計クラスを継承</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/DigitalClock.php';

    // 現在時刻
    $timestamp = time();
    // 時計クラスを継承したデジタルクラスをインスタンス化
    $digitalClock = new DigitalClock();

    $digitalClock->setTime($timestamp);
    echo '今の時間'.$digitalClock->show();

?>
</body>
</html>
