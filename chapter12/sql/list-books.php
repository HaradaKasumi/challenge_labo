<?php

/* 注意：本プログラムは脆弱性を含みます。 */

// DBに接続する関数
function connect(): PDO
{
    $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}

// 本のタイトルで検索する関数
function findBooks(string $freeword): ?array
{
    $pdo = connect();
    $sql = "SELECT title, published FROM books WHERE title LIKE '%{$freeword}%'";
    $statement = $pdo->query($sql);
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    return count($books) > 0 ? $books : null;
}

// HTMLエスケープする関数
function escape(?string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// メインルーチン
if (isset($_GET['freeword'])) {
    try {
        $books = findBooks($_GET['freeword']);
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
    <h1>本のタイトルで検索する</h1>
    <form name="login-form" action="" method="GET">
        タイトル：<input type="text" name="freeword" value="<?=isset($_GET['freeword']) ? $_GET['freeword'] : ''?>"><br>
        <button type="submit" name="operation" value="login">検索する</button>
    </form>
    <hr>
    <?php if (isset($_GET['freeword'])) : ?>
        <table border="1">
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?=escape($book['title'])?></td>
                    <td><?=escape($book['published'])?></td>
                </tr>
            <?php endforeach;?>
        </table>
    <?php endif;?>
</body>
</html>
