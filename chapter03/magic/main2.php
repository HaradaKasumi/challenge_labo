<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>マジックメソッド2 - honkaku</title>
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

        // プロパティをセットするマジックメソッド
        public function __set($name, $value)
        {
            $this->extras[$name] = $value;
        }

        // プロパティを取得するマジックメソッド
        public function __get($name)
        {
            return $this->extras[$name];
        }

        // 出力するマジックメソッド
        public function __toString()
        {
            $properties = 'タスク名:' . $this->name . PHP_EOL;
            foreach ($this->extras as $key => $value) {
                $properties .= $key . ':' . $value . PHP_EOL;
            }
            return $properties;
        }
    }

    // メインルーチン
    $task = new Task();
    $task->name = '飛行機のチケット購入'; // __set()は呼ばれない
    $task->placeFrom = '羽田'; // __set()が呼ばれる
    $task->placeTo = '福岡'; // __set()が呼ばれる
    echo $task; // __toString()が呼ばれる
?>
</pre>
</body>
</html>
