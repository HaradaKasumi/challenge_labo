<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ジェネレーターのシンプルな例 - honkaku</title>
</head>
<body>
<pre>
<?php
    // ジェネレーター
    function greetings()
    {
        $greetings = [
            'morning'   => 'おはよう',
            'afternoon' => 'こんにちは',
            'evening'   => 'こんばんは',
            'night'     => 'おやすみ',
        ];
        foreach ($greetings as $time => $greeting) {
            yield $time => $greeting;
        }
    }

    // メインルーチン
    foreach (greetings() as $time => $greeting) {
        echo "{$time}のあいさつ：{$greeting}", PHP_EOL;
    }
?>
</pre>
</body>
</html>