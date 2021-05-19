<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>エラーレベルの制御 - honkaku</title>
</head>
<body>
    <h3>●エラーレベル：E_ALL</h3>
    <?php
        ini_set('display_errors', 'On');
        ini_set('error_reporting', E_ALL);
        $num1 = 100 / 0;
    ?>

    <h3>●エラーレベル：E_ALL & ~E_WARNING</h3>
    <?php
        ini_set('display_errors', 'On');
        ini_set('error_reporting', E_ALL & ~E_WARNING);
        $num2 = 100 / 0;
    ?>
</body>
</html>
