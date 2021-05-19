<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CSVファイルを読み込む - honkaku</title>
</head>
<body>
<pre>
<?php
    setlocale(LC_ALL, 'ja_JP.UTF-8');

    require_once dirname(__FILE__) . '/functions.php';

    // sample.csvの文字コードをUTF-8に変換し、sample-utf.csvとして保存します。
    sjis2utf('files/sample.csv', 'files/temp/sample-utf.csv');

    // sample-utf.csvを読み込みます。
    $csv = new SplFileObject('files/temp/sample-utf.csv');
    $csv->setFlags(SplFileObject::READ_CSV);

    // sample-utf.csvを1行ずつループ処理します。
    // fieldsPerLineはCSVをフィールド単位に区切った配列です。
    foreach ($csv as $fieldsPerLine) {
        print_r($fieldsPerLine);
    }
    $csv = null;
?>
</pre>
</body>
</html>