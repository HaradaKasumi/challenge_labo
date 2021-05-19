<?php

declare(strict_types=1);

/* 注意：本プログラムは、故意に処理スピードが遅くなる書き方をしています */

ini_set('max_execution_time', '600');
require_once dirname(__FILE__) . '/ItemModel.php';
require_once dirname(__FILE__) . '/ItemCategoryModel.php';

/**
 * データベース接続インスタンスを返す関数
 */
function connect(): PDO
{
    $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}

/**
 * エスケープする関数
 */
function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// メインルーチン
if (!isset($_GET['item_name']) || trim($_GET['item_name']) === '') {
    return;
}
try {
    $pdo = connect();
    $itemModel = new ItemModel($pdo);
    $items = $itemModel->findItems($_GET['item_name']); // 検索ワードに合致する商品を取得
} catch (PDOException $e) {
    echo '商品の検索に失敗しました。';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品データの検索結果 - honkaku</title>
</head>
<body>
    <h3>商品名に「<?=escape($_GET['item_name'])?>」を含む商品の検索結果(<?=count($items)?>件)</h3>
    <table border="1">
        <tr>
            <th>商品名</th>
            <th>カテゴリ</th>
        </tr>
        <?php foreach($items as $item) : ?>
            <tr>
                <td><?=escape($item['name'])?></td>
                <td><?=escape($item['category_name'])?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>