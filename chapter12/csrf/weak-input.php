<?php

/* 注意：本プログラムは脆弱性を含みます。 */

declare(strict_types=1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投稿画面(悪い例) - honkaku</title>
</head>
<body>
    <h3>投稿画面</h3>
    <form name="input-form" method="post" action="weak-thankyou.php">
        ●投稿内容：<br>
        <textarea name="message" rows="4" cols="50"></textarea><br>
        <button type="submit" name="operation" value="send">送信</button>
    </form>
</body>
</html>
