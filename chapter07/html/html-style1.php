<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>PHPとHTMLが混在するコード</title>
</head>
<body>
    <h1>空港データの表示</h1>
<?php
    $airports = [
            [
                'name'      => '羽田',
                'address'   => '東京都大田区'
            ],
            [
                'name'      => '成田',
                'address'   => '千葉県成田市'
            ],
            [
                'name'      => '中部国際',
                'address'   => '愛知県常滑市'
            ]
    ];
?>
    <p><?='空港の数：', count($airports);?></p>
    <h3>空港リスト</h3>
    <ul>
<?php
    foreach ($airports as $airport) {
        if (!isset($airport['name'])) {
            continue;
        }
        // 「東京都大…」のように、4文字目以降は「…」とする
        $address = mb_strimwidth($airport['address'], 0, 9 , "…", "UTF-8");
?>
        <li><?=$airport['name'], '空港'?>：<?=$address?></li>
<?php
    }
    echo '</ul>';
?>
</body>
</html>
