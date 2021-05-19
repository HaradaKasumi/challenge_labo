<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>名前空間7 - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Office/Word/Writer.php';
    require_once dirname(__FILE__) . '/Office/Excel/Writer.php';

    use Office\Word\Writer as WordWriter;
    use Office\Excel\Writer as ExcelWriter;

    $writer = new WordWriter(); // WordのWriterクラスを使う
    $writer->write();

    $writer = new ExcelWriter(); // ExcelのWriterクラスを使う
    $writer->write();
?>
</body>
</html>
