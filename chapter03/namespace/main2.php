<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>名前空間2 - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Office/File.php';
    $file = new Office\File();
    $file->setWordProperty();
    $file->setExcelProperty();
?>
</body>
</html>
