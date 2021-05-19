<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JSONデータを扱う - honkaku</title>
</head>
<body>
<pre>
<?php
    $novels = 
        [
            [
                'title' => '斜陽',
                'author' => '太宰治',
            ],
            [
                'title' => 'The Catcher in the Rye', // ライ麦畑でつかまえて
                'author' => 'Jerome David Salinger',
            ]
        ];
    echo json_encode($novels, JSON_PRETTY_PRINT);
?>
</pre>
</body>
</html>