<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>parentキーワード - honkaku</title>
</head>
<body>
<pre>
<?php
    abstract class Clock
    {
        // 時間をセットする
        public function setTime(int $time): void
        {
            echo 'ClockクラスのsetTimeメソッドが呼ばれました。', PHP_EOL;
        }
    }

    class DigitalClock extends Clock
    {
        // 時間をセットする(オーバーライド)
        public function setTime(int $time): void
        {
            echo 'DigitalClockクラスのsetTimeメソッドが呼ばれました。', PHP_EOL;
            parent::setTime($time);
        }
    }

    // メインルーチン
    $currentTime = strtotime('2018-08-22 17:15');
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);
?>
</pre>
</body>
</html>