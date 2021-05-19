<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/PdoConditions.php';
require_once dirname(__FILE__) . '/PdoCondition.php';
require_once dirname(__FILE__) . '/PdoExecutor.php';
require_once dirname(__FILE__) . '/functions.php';

$pdo = connect();
$sql = 'select * from books where title like :title and publisher in (:publishers)';
$conditions = new PdoConditions();
$conditions->add(new PdoCondition(':title', '%料理%', PDO::PARAM_STR));
$conditions->add(new PdoCondition(':publishers', ['料理評論社', 'ワールド出版社'], PDO::PARAM_STR));
$executor = new PdoExecutor($pdo);
try {
    $statement = $executor->execute($sql, $conditions);
} catch (PDOException $e) {
    echo '本の検索に失敗しました。';
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IN句への対処 - honkaku</title>
</head>
<body>
    <h3>書籍の検索結果</h3>
    <table border="1">
        <tr>
            <th>タイトル</th>
            <th>価格</th>
            <th>発売日</th>
        </tr>
        <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?=escape($row['title'])?></td>
                <td><?=escape(number_format($row['price']))?></td>
                <td><?=escape($row['published'])?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <p>デバッグSQL：<?=escape($executor->getDebugSql())?></p>
</body>
</html>