<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>useを使う場合</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Office/Word/Writer.php';

    use Office\Word\Writer;

    $writer = new Writer(); // wordのwriterクラスを使う
    $writer->write();

?>
</body>
</html>
