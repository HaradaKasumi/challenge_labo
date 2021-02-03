<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>連想配列の配列 - honkaku</title>
</head>
<body>
<?php
$airports = [
    ['name' => '羽田',
        'address' => '東京都大田区'
    ],
    [
        'name' => '成田',
        'address' => '千葉県成田市'
    ],
    [
        'name' => '関西国際',
        'address' => '大阪'
    ]
];
$airports[] = [
    'name' => '中部国際',
    'address' => '愛知県'
];

?>
<p><?= $airports[0]['name'] ?> - <?= $airports[0]['address'] ?></p>
<p><?= $airports[1]['name'] ?> - <?= $airports[1]['address'] ?></p>
<p><?= $airports[2]['name'] ?> - <?= $airports[2]['address'] ?></p>
<p><?= $airports[3]['name'] ?> - <?= $airports[3]['address'] ?></p>
<p>
<pre><?php print_r($airports); ?></pre>
</p>
</body>
</html>
