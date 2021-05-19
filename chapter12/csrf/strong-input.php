<?php

declare(strict_types=1);

session_start();

// ランダムなトークンを生成する関数
function generateToken(): string
{
    $bytes = openssl_random_pseudo_bytes(16);
    return bin2hex($bytes);
}
$token = generateToken();
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投稿画面 - honkaku</title>
</head>
<body>
    <h3>投稿画面</h3>
    <form name="input-form" method="post" action="strong-thankyou.php">
        <input type="hidden" name="token" value="<?=$token?>">
        ●投稿内容：<br>
        <textarea name="message" rows="4" cols="50"></textarea><br>
        <button type="submit" name="operation" value="send">送信</button>
    </form>
</body>
</html>
