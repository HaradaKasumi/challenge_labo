<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP_EOLによる改行 - honkaku</title>
</head>
<body>
    <?php
        $mailBody  = "お問い合わせを受け付けました。" . PHP_EOL;
        $mailBody .= "■お問い合わせ内容：" . PHP_EOL;
        $mailBody .= "\t商品番号「abc123」について、サイズを教えてください。";
    ?>
    <p><pre><?=$mailBody?></pre></p>
</body>
</html>
