<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>パスワードのハッシュ化 - honkaku</title>
</head>
<body>
<pre>
<?php
    $hashedPassword = password_hash('abcde1234(^^)v', PASSWORD_DEFAULT, ['cost' => 13]);
    echo 'ハッシュ化されたパスワード：', $hashedPassword, PHP_EOL;

    $input = 'abcde1234(^^)v';
    if (password_verify($input, $hashedPassword)) {
        echo 'パスワードは一致しています。', PHP_EOL;       // このブロックに入る
    } else {
        echo 'パスワードは一致していません。', PHP_EOL;
    }

    $input = 'xyz9876(^^)v';
    if (password_verify($input, $hashedPassword)) {
        echo 'パスワードは一致しています。', PHP_EOL;
    } else {
        echo 'パスワードは一致していません。', PHP_EOL;     // このブロックに入る
    }
?>
</pre>
</body>
</html>