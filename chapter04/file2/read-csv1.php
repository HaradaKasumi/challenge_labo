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
    /* 注意！本プログラムは期待通りに動作しません。 */

    // sample.csvを読み込みます
    $csv = new SplFileObject('files/sample.csv');
    $csv->setFlags(SplFileObject::READ_CSV);

    // sample.csvを1行ずつループ処理します。
    // fieldsPerLineはCSVをフィールド単位に区切った配列です。
    foreach ($csv as $fieldsPerLine) {
        mb_convert_variables('UTF-8', 'SJIS-win', $fieldsPerLine);
        print_r($fieldsPerLine);
    }
    $csv = null;
?>
</pre>
</body>
</html>