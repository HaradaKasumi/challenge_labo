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
    $xml = <<< XML
<?xml version="1.0" encoding="UTF-8"?>
<books>
  <book id="1001">
    <title>斜陽</title>
    <author>太宰治</author>
  </book>
  <book id="1002">
    <title>こころ</title>
    <author>夏目漱石</author>
  </book>
</books>
XML;

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadXml($xml);
    $bookList = $dom->getElementsByTagName('book');
    foreach ($bookList as $book) {
        $titleValue = $book->getElementsByTagName('title')->item(0)->nodeValue;
        $authorValue = $book->getElementsByTagName('author')->item(0)->nodeValue;
        echo '[タイトル]', $titleValue, '　[著者]', $authorValue, PHP_EOL;
    }
?>
</pre>
</body>
</html>