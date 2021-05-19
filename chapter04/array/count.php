<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列の要素数を数える - honkaku</title>
</head>
<body>
<pre>
<?php
    $chars = ['a', 'b', 'c'];
    echo count($chars), PHP_EOL;    // 結果：3

    $chars = [
        'a' => 'あ',
        'i' => 'い',
        'u' => 'う'
    ];
    echo count($chars), PHP_EOL;    // 結果：3

    $user = [
        'name'          => 'Tanaka',
        'age'           => 20,
        'prefecture'    => 'Osaka',
        'hobbies'       => ['魚釣り', '読書', '作詞']
    ];
    echo count($user), PHP_EOL;    // 結果：4
    echo count($user, COUNT_RECURSIVE), PHP_EOL;    // 結果：7
?>
</pre>
</body>
</html>