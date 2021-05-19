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
        // 1文字の列名の生成をサブジェネレーター1に任せる
        yield from excelColumnNamesOf1Character();

        // 2文字の列名の生成をサブジェネレーター2に任せる
        yield from excelColumnNamesOf2Characters();
    }

    // サブジェネレーター1
    function excelColumnNamesOf1Character()
    {
        // 列名「A～Z」をyieldで返す
        foreach (range('A', 'Z') as $columnName) {
            yield $columnName;
        }
    }

    // サブジェネレーター2
    function excelColumnNamesOf2Characters()
    {
        // 列名「AA～ZZ」をyieldで返す
        foreach (range('A', 'Z') as $columnName1) {
            foreach (range('A', 'Z') as $columnName2) {
                yield $columnName1 . $columnName2;
            }
        }
    }

    // メインルーチン
    foreach (excelColumnNames() as $excelColumnName) {
        echo $excelColumnName, PHP_EOL;
    }
?>
</pre>
</body>
</html>