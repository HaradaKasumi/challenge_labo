<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>定数 - honkaku</title>
</head>
<body>
    <?php
      define('TAX_PERCENT', 0.05);
      define('SMTP_HOST', 'example.com')
    ?>
    <p>消費税率は : <?=TAX_PERCENT;?></p>
    <p>100円の税込金額は : <?=100 + 100 * TAX_PERCENT;?></p>
    <p>SMTPサーバーは : <?=SMTP_HOST;?></p>
</body>
</html>
