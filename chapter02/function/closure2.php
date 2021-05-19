<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クロージャ - honkaku</title>
</head>
<body>
    <?php
        $greeting = 'Good';

        // クロージャーの定義。useを使って$greetingを引き継ぎます。
        $greetingMaker = function ($time) use ($greeting) {
            print $greeting . ' ' . $time . '<br>';
        };

        // 出力結果は「Good Morning」
        $greetingMaker('Morning');

        // 一見「Beautiful Evening」が出力されそうなものですが「Good Evening」が出力されます。
        // useで引き継がれるのは関数が定義された時点の$greetingの値だからです。
        // クロージャーの定義時に「use (&$greeting)」と参照渡しで引き継ぐことで、
        // 「Beautiful Evening」が出力されるようになります。
        $greeting = 'Beautiful';
        $greetingMaker('Evening');
    ?>
</body>
</html>
