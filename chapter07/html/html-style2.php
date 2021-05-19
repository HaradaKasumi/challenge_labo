<?php

declare(strict_types=1);

// 指定した文字数でカットする関数
function cut(string $string, int $len): string
{
    $width = intval($len) * 2 + 1;
    $result = mb_strimwidth($string, 0, $width , "…", "UTF-8");
    return $result;
}

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
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>PHPとHTMLが混在するコード</title>
</head>
<body>
    <h1>空港データの表示</h1>
    <p>空港の数：<?=count($airports);?></p>
    <h3>空港リスト</h3>
    <ul>
        <?php foreach ($airports as $airport) : ?>
            <?php if (!isset($airport['name'])) : ?>
                <?php continue; ?>
            <?php endif; ?>
            <li><?=$airport['name']?>空港：<?=cut($airport['address'], 4)?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
