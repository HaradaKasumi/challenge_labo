<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ジェネレーターでEXCELの列名を生成する - honkaku</title>
</head>
<body>
<pre>
<?php
    // ジェネレーター
    function excelColumnNames()
    {
        // 列名「A～Z」をyieldで返す
        foreach (range('A', 'Z') as $columnName) {
            yield $columnName;
        }

        // 列名「AA～ZZ」をyieldで返す
        foreach (range('A', 'Z') as $columnName1) {
            foreach (range('A', 'Z') as $columnName2) {
                yield $columnName1 . $columnName2;
            }
        }
    }

    foreach (excelColumnNames() as $excelColumnName) {
        echo $excelColumnName, PHP_EOL;
    }
?>
</pre>
</body>
</html>