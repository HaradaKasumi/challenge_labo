<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ini_set関数 - honkaku</title>
</head>
<body>
    <?php
        ini_set('date.timezone', 'Asia/Tokyo');
        // 日本時間の現在時刻を表示します。
        echo date('Y-m-d H:i:s'), '<br>';

        ini_set('date.timezone', 'UTC');
        // 協定世界時(UTC)の現在時刻を表示します。日本の時刻から9時間引きます。
        echo date('Y-m-d H:i:s'), '<br>';
    ?>
</body>
</html>
