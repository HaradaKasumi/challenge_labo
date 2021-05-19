<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>スーパークラスのコンストラクタを呼び出す - honkaku</title>
</head>
<body>
<pre>
<?php
    abstract class Clock
    {
        private $time;

        // コンストラクタ
        public function __construct(int $time)
        {
            echo 'Clockクラスのコンストラクタが呼ばれました', PHP_EOL;
            $this->time = $time;
        }
    }

    class DigitalClock extends Clock
    {
        private $color;

        // コンストラクタ
        public function __construct(int $time, string $color)
        {
            echo 'DigitalClockクラスのコンストラクタが呼ばれました', PHP_EOL;
            $this->color = $color;
            parent::__construct($time);
        }
    }

    // メインルーチン
    $currentTime = strtotime('2018-08-22 17:15');
    $digitalClock = new DigitalClock($currentTime, 'yellow');
?>
</pre>
</body>
</html>