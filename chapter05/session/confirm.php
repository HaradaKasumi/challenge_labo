<?php

declare(strict_types=1);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>セッションの利用 - honkaku</title>
</head>
<body>
    <h2>お問い合わせ確認</h2>

    <h4>●メールアドレス：</h4>
    <p><?=$_SESSION['data']['email']?></p>

    <h4>●お問い合わせ内容：</h4>
    <p><?=nl2br($_SESSION['data']['message'])?></p>

    <a href="thankyou.php">送信する</a><br>
    <a href="input.php">入力画面へ戻る</a>
</body>
</html>