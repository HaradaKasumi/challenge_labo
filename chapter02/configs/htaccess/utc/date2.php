<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>.htaccessによるオプション値の変更 - honkaku</title>
</head>
<body>
    <?php
        // UTCの現在時刻を表示します。
        // 同じディレクトリ内の.htaccessが上書き適用されます。
        echo date('Y-m-d H:i:s'), '<br>';
    ?>
</body>
</html>
