<?php

/* 注意：本プログラムは脆弱性を含みます。 */

declare(strict_types=1);

function escape(string $val): string
{
    return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投稿画面(悪い例) - honkaku</title>
</head>
<body>
    <h3>投稿完了しました</h3>
    ●投稿内容：<br>
    <?=escape($_POST["message"])?>
</body>
</html>