<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>レビュー詳細画面 - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/StarCalculator.php';

    // レビュー一覧。本来はデータベースから取得するが、ここでは固定値とする。
    $reviews =
        [
            [
                'title'     => '首が楽になります。',
                'contents'  => '首こりが辛い時に塗って寝ると、翌朝にはなおっています。',
                'stars'     => [
                    'useful'    => 4,
                    'price'     => 3,
                    'quality'   => 4
                ]
            ],
            [
                'title'     => '夏場に涼しくなります。',
                'contents'  => '夏場に身体に塗って外出すると、あまり暑さを感じずに過ごせます。',
                'stars'     => [
                    'useful'    => 5,
                    'price'     => 2,
                    'quality'   => 4
                ]
            ],
            [
                'title'     => '香りがよい',
                'contents'  => 'ハッカの良い香りがとても気に入っています。',
                'stars'     => [
                    'useful'    => 4,
                    'price'     => 0,
                    'quality'   => 5
                ]
            ]
        ];

    $starCalculator = new StarCalculator();
?>

<h1>「ハッカ・バーム」のレビュー</h1>
<h2>総合評価：<?=$starCalculator->calculateOverallStarAverage($reviews)?></h2>
<table border="1">
    <?php foreach ($reviews as $review) : ?>
        <h3><?=$review['title']?></h3>
        <?=$review['contents']?><br>
        使いやすさ：<?=$review['stars']['useful']?>
        お値打ち感：<?=$review['stars']['price']?>
        品質：<?=$review['stars']['quality']?>
    <?php endforeach;?>
</table>
</body>
</html>
