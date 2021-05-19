<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列をソートする - honkaku</title>
</head>
<body>
<pre>
<?php
    $prices = [200, 3100, '150', 2500, 90];

    echo '●配列値で昇順ソートする。', PHP_EOL;
    sort($prices);
    print_r($prices);

    echo '●配列値で降順ソートする。', PHP_EOL;
    rsort($prices);
    print_r($prices);

    echo '●配列値を文字列として昇順ソートする。', PHP_EOL;
    sort($prices, SORT_STRING);
    print_r($prices);

    $files = ['image1.png', 'image105.png', 'image2.png', 'image3.png', 'image44.png'];
    echo '●配列値で自然順ソートする。', PHP_EOL;
    sort($files, SORT_NATURAL);
    print_r($files);

    $items = [
        100001      =>      '掃除機',
        109913      =>      'エアコン',
        100409      =>      'PC',
        100004      =>      'テレビ'
    ];

    echo '●連想配列キーの昇順でソートする。', PHP_EOL;
    ksort($items);
    print_r($items);

    echo '●連想配列キーの降順でソートする。', PHP_EOL;
    krsort($items);
    print_r($items);
?>
</pre>
</body>
</html>