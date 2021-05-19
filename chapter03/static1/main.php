<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>静的メソッド - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/ExcelColumnConverter.php';
    echo ExcelColumnConverter::calcAlphabetColumnName(3), PHP_EOL; // 出力結果「D」
    echo ExcelColumnConverter::calcNumberColumnName('F'); // 出力結果「5」

    $stdClass = new stdClass();
    $stdClass->name = 'stdclass no property';
    echo $stdClass->name;
?>
</pre>
</body>
</html>
