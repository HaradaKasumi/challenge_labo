<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>XMLデータを扱う - honkaku</title>
</head>
<body>
<pre>
<?php
    $dom = new DOMDocument('1.0', 'UTF-8');
    $books = $dom->appendChild($dom->createElement('books'));

    // 1冊目の本を追加
    $book = $books->appendChild($dom->createElement('book'));
    $book->setAttribute('id', '1001');
    $book->appendChild($dom->createElement('title', '斜陽'));
    $book->appendChild($dom->createElement('author', '太宰治'));

    // 2冊目の本を追加
    $book = $books->appendChild($dom->createElement('book'));
    $book->setAttribute('id', '1002');
    $book->appendChild($dom->createElement('title', 'こころ'));
    $book->appendChild($dom->createElement('author', '夏目漱石'));

    // formatOutput = true に設定しておくと、改行や字下げを入れて見やすく出力してくれます。
    $dom->formatOutput = true;

    // XMLを出力する
    echo htmlspecialchars($dom->saveXml(), ENT_QUOTES);
?>
</pre>
</body>
</html>