<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHPはオーバーロードできない - honkaku</title>
</head>
<body>
<?php
    abstract class Clock
    {
        public function setTime(string $time, $extraArguments = null)
        {
            // 何らかの処理
        }
    }
    class DigitalClock extends Clock
    {
        public function setTime(string $time, $extraArguments = null)
        {
            // デジタル時計特有の何らかの処理
        }
    }
    class AnalogClock extends Clock
    {
        public function setTime(string $time, $extraArguments = null)
        {
            // アナログ時計特有の何らかの処理
        }
    }

    // メインルーチン
    $digitalClock = new DigitalClock();
    $digitalClock->setTime('11:14', ['fontColor' => 'white']);
    $analogClock = new AnalogClock();
    $analogClock->setTime('11:14');
?>
</body>
</html>

