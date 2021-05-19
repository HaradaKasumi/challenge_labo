<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルへの書き込み - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/functions.php';

    // テキストファイルへの書き込み
    $file = new SplFileObject('files/generated.txt', 'w');
    $text = <<< TEXT
いろはにほへと　ちりぬるを
わかよたれそ　つねならむ
うゐのおくやま　けふこえて
あさきゆめみし　ゑひもせす
TEXT;
    $bytes = $file->fwrite($text);
    echo '●generated.txtに', $bytes, 'バイトを書き込みました。', PHP_EOL;

    // CSVファイルへの書き込み
    $csv = new SplFileObject('files/temp/generated-utf.csv', 'w');
    $items = [
        ['商品名', '価格'],
        ['掃除機', '15,000'],
        ['エアコン', '60,000'],
        ['アイロン高性能', '20,000'],
        ["1行目\n\"2行目\"\n3行目", '30,000'],
    ];
    foreach ($items as $item) {
        $csv->fputcsv($item);
    }
    // generated-utf.csvの文字コードをShift-JISに変換し、generated.csvとして保存します。
    utf2sjis('files/temp/generated-utf.csv', 'files/generated.csv');
    echo '●generated.csvに書き込みました。', PHP_EOL;
    $csv = null;
?>
</pre>
</body>
</html>