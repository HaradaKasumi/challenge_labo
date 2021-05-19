<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>正規表現をエスケープする - honkaku</title>
</head>
<body>
<pre>
<?php

    // ユーザが入力したフリーワード。A.T.車(オートマ車)の本を探したい。
    $freeWord = 'A.T.';

    $books = [
        'A.T.車の運転マナー',
        'OAuthによるWebサービス認証入門',
        '睡眠は枕で変わる'
    ];

    echo '●エスケープなしで本を検索する例', PHP_EOL;
    foreach ($books as $book) {
        if (preg_match("/{$freeWord}/ui", $book)) {
            echo '・ヒットした本のタイトル：', $book, PHP_EOL;  // 「OAuth」という単語まで引っかかってしまう
        }
    }

    echo '●エスケープして本を検索する例', PHP_EOL;
    foreach ($books as $book) {
        if (preg_match('/' . preg_quote($freeWord, '/') . '/ui', $book)) {
            echo '・ヒットした本のタイトル：', $book, PHP_EOL;
        }
    }
?>
</pre>
</body>
</html>