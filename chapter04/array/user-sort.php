<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列をユーザ定義のルールでソートする - honkaku</title>
</head>
<body>
<pre>
<?php
    $users = [
        [
            'name'          => 'Hanako SUZUKI', // 氏名
            'num-of-posts'  => 15               // 投稿数
        ],
        [
            'name'          => 'Ichiro YANAGI',
            'num-of-posts'  => 92
        ],
        [
            'name'          => 'Akira HANAYAMA',
            'num-of-posts'  => 15
        ],
        [
            'name'          => 'Ayami YOSHIKAWA',
            'num-of-posts'  => 8
        ]
    ];
    usort($users, function($a, $b) {
        if ($a['num-of-posts'] === $b['num-of-posts']) {
            return $a['name'] <=> $b['name'];
        }
        return ($a['num-of-posts'] <=> $b['num-of-posts']) * -1;
    });
    print_r($users);
?>
</pre>
</body>
</html>