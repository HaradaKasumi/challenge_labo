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

    $mailBody = <<< CONTENTS
{$userName}様

お問い合わせありがとうございました。
お問い合わせ内容は以下の通りです。

■お名前
　{$userName}

■メールアドレス
　{$email}

■お問い合わせ内容
　{$inquiry}

CONTENTS;
?>
<p><?php echo nl2br($mailBody);?></p>
</body>
</html>
