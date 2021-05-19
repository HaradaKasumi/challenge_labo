<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>サブクラスを1まとめに扱う - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Canvas.php';
    require_once dirname(__FILE__) . '/DigitalClock.php';
    require_once dirname(__FILE__) . '/AnalogClock.php';
    $canvas = new Canvas();

    $currentTime = time();
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);

    $analogClock = new AnalogClock();
    $analogClock->setTime($currentTime);
    $canvas->drawClock($analogClock); // 結果：長針：90°　短針：157.5°
?>
</pre>
</body>
</html>
