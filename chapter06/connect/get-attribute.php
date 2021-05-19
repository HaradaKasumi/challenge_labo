<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO::getAttributeメソッド - honkaku</title>
</head>
<body>
    <?php
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $errorModeString = null;
            switch ($pdo->getAttribute(PDO::ATTR_ERRMODE)) {
                case PDO::ERRMODE_SILENT:
                    $errorModeString = 'PDO::ERRMODE_SILENT';
                    break;
                case PDO::ERRMODE_WARNING:
                    $errorModeString = 'PDO::ERRMODE_WARNING';
                    break;
                case PDO::ERRMODE_EXCEPTION:
                    $errorModeString = 'PDO::ERRMODE_EXCEPTION';
                    break;
                default:
                    $errorModeString = 'undefined';
            }
            echo '■現在のエラーモードは「', $errorModeString, '」です。';
        } catch (PDOException $e) {
            echo '接続に失敗しました。';
        }
    ?>
</body>
</html>