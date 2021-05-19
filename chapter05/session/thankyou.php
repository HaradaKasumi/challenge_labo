<?php

declare(strict_types=1);

function deleteSession()
{
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
}
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>セッションの利用 - honkaku</title>
</head>
<body>
    <h2>お問い合わせ完了</h2>
    <p>お問い合わせありがとうございました。デバッグ情報：</p>
    <pre><?php print_r($_SESSION); ?></pre>
    <?php $_SESSION = []; ?>
    <?php deleteSession(); ?>
    <?php session_destroy(); ?>
</body>
</html>
