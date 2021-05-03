<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>名前空間を利用する場合</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Office/Word/Writer.php';
    require_once dirname(__FILE__) . '/Office/Excel/Writer.php';

    $writer = new \Office\Word\Writer();
    $writer->write();


    $writer = new \Office\Excel\Writer();
    $writer->write();
?>
</body>
</html>
