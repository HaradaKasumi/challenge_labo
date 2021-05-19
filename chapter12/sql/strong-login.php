<?php

declare(strict_types=1);

// DBに接続する関数
function connect(): PDO
{
    $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}

// ログインID・パスワードを元に一致するユーザを探す関数
function findUser(string $loginId, string $password): ?array
{
    $pdo = connect();
    $sql = "SELECT * FROM honkaku_users WHERE login_id = :login_id AND password = :password";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':login_id', $loginId, PDO::PARAM_STR);
    $statement->bindValue(':password', $password, PDO::PARAM_STR);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (count($users) === 1) {
        return $users[0];
    }
    return null;
}

// HTMLエスケープする関数
function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// メインルーチン
if (isset($_POST['login_id']) && isset($_POST['password'])) {
    try {
        $user = findUser($_POST['login_id'], $_POST['password']);
    } catch (PDOException $e) {
        echo 'Error';
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SQLインジェクション(未対策) - honkaku</title>
</head>
<body>
    <h1>ログイン画面</h1>
    <form name="login-form" action="" method="POST">
        ID：<input type="text" name="login_id" value=""> (例：dummy)<br>
        パスワード：<input type="text" name="password" value=""> (例：' or '1'='1)<br>
        <button type="submit" name="operation" value="login">ログイン</button>
    </form>
    <hr>
    <?php if (isset($_POST['operation']) && $_POST['operation'] === 'login') : ?>
        <?php if (intval($user['id']) > 0) : ?>
            <p><?=escape($user['user_name'])?>さん。ログインに成功しました。
        <?php else : ?>
            <p>ログインに失敗しました。</p>
        <?php endif; ?>
    <?php endif;?>
</body>
</html>

