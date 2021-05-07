<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>マジックメソッド1 - honkaku</title>
</head>
<body>
<pre>
<?php

    // タスククラス
    class Task
    {
        // タスク名
        public $name;

        // 付加的な情報
        private $extras = [];

        // プロパティをセットするメソッド
        public function __set($name, $value)
        {
            $this->extras[$name] = $value;
        }

        // getするメソッド
        public function __get($name)
        {
            return $this->extras[$name];
        }

        // tostring
        public function __toString()
        {
            $properties = 'タスク名：' . $this->name;
            foreach($this->extras as $key => $value){
                $properties .= $key . ':' . $value;
            }
            return $properties;

        }
    }

    $task = new Task();
    $task->name = '飛行機チケット予約';
    $task->placeFrom = '羽田';
    $task->placeTo = '福岡';
    $task->test = 'test';

    echo 'タスク名：', $task->name, PHP_EOL;
    echo '出発：', $task->placeFrom, PHP_EOL;
    echo '到着：', $task->placeTo, PHP_EOL;
    echo '到着：', $task->test, PHP_EOL;
    // echo $task;
?>
</pre>
</body>
</html>
