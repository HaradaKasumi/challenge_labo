<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>エスケープシーケンス - honkaku</title>
</head>
    <body>
    <?php
    $mailBody = "お問い合わせを受け付けました。\n\n";
    $mailBody .= "■お問い合わせ内容：\n";
    $mailBody .= "\t商品番号「abc123」について、サイズを教えてください。";
    ?>
    <p>
    <pre><?= $mailBody ?></pre>
    </p>
</body>
</html>
