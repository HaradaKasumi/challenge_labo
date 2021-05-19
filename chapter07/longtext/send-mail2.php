<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>長いテキストの外部ファイル化</title>
</head>
<body>
<?php
    $userName = '鈴木花子';
    $email = 'suzuki@example.com';
    $inquiry = "商品No：abc123について質問です。\n次回の入荷予定はありますか？";

    $mailBody = file_get_contents(dirname(__FILE__) . '/files/mail-body.txt');
    $mailBody = str_replace('{USER_NAME}'   , $userName,    $mailBody);
    $mailBody = str_replace('{EMAIL}'       , $email,       $mailBody);
    $mailBody = str_replace('{INQUIRY}'     , $inquiry,     $mailBody);
?>
<p><?php echo nl2br($mailBody);?></p>
</body>
</html>
