<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列から特定のキーを取り出す - honkaku</title>
</head>
<body>
<pre>
<?php
    $userList = [
        [
            'user_id'       => 100001,
            'user_name'     => 'Tanaka',
            'age'           => 20,
            'prefecture'    => 'Osaka'
        ],
        [
            'user_id'       => 100002,
            'user_name'     => 'Suzuki',
            'age'           => 38,
            'prefecture'    => 'Ehime'
        ],
        [
            'user_id'       => 100003,
            'user_name'     => 'Tsukamoto',
            'age'           => 28,
            'prefecture'    => 'Aichi'
        ]
    ];

    echo '●prefectureキーのみを取得。', PHP_EOL;
    $prefectures = array_column($userList, 'prefecture');
    print_r($prefectures);

    echo '●prefectureキーのみを取得し、戻り値のキーはuser_id値とする。', PHP_EOL;
    $prefectures = array_column($userList, 'prefecture', 'user_id');
    print_r($prefectures);

    echo '●すべてのキーを取得し、戻り値のキーはuser_id値とする。', PHP_EOL;
    $prefectures = array_column($userList, null, 'user_id');
    print_r($prefectures);
?>
</pre>
</body>
</html>