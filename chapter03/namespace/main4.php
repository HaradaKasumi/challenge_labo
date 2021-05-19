<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>名前空間4 - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Office/Word/Writer.php';
    class SomeClass
    {
        use Office\Word\Writer; // エラーになる
    }
?>
</body>
</html>
