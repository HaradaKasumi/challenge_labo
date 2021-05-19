<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>データ型 - honkaku</title>
</head>
<body>
    <?php
        // 整数型
        $integerValue = 10;

        // 小数(浮動小数点数)
        $floatValue = 12.34;

    // 文字列型(シングルクオートを使う場合)
    $stringValue1 = '文字列1';

    // 文字列型(ダブルクオートを使う場合)
        $stringValue2 = "文字列2";

        // 真偽値型
        $boolValue = true;

        // null
        $nullValue = null;

        // 空文字(文字列型)
        $emptyStringValue = '';
    ?>
    <p>整数 : <?php echo $integerValue; ?></p>
    <p>浮動小数点数 : <?php echo $floatValue; ?></p>
    <p>文字列1 : <?php echo $stringValue1; ?></p>
    <p>文字列2 : <?php echo $stringValue2; ?></p>
    <p>真偽値 : <?php var_dump($boolValue); ?></p>
    <p>NULL値 : <?php var_dump($nullValue); ?></p>
    <p>文字列3(空文字) : <?php var_dump($emptyStringValue); ?></p>
</body>
</html>
