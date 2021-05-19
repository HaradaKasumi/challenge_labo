<?php

declare(strict_types=1);

function connect(): PDO
{
    $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}
try {
    $pdo = connect();
} catch (PDOException $e) {
    echo '接続に失敗しました。';
    return;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>トランザクション - honkaku</title>
</head>
<body>
<pre>
<?php
    // トランザクションを開始します。
    $pdo->beginTransaction();

    try {
        // このSQLは成功します。
        $pdo->exec("INSERT INTO books(created, title) VALUES(CURRENT_TIMESTAMP, 'SAMPLE BOOK 1')");
        echo '* SAMPLE BOOK 1のレコード作成に成功しました。', PHP_EOL;

        // わざと不正なSQLを実行してみます。ここで例外が発生します。
        $pdo->exec("*** INVALID SQL ! ***");
        echo '* INVALID SQLの実行に成功しました。', PHP_EOL;

        // このSQLは成功します。ただし、例外が発生するため、この行へはたどり着きません。
        $pdo->exec("INSERT INTO books(created, title) VALUES(CURRENT_TIMESTAMP, 'SAMPLE BOOK 2')");
        echo '* SAMPLE BOOK 2のレコード作成に成功しました。', PHP_EOL;

        // 例外が発生せずにここまでたどり着けば、トランザクションをコミットし、INSERT処理が確定します。
        $pdo->commit();
        echo '* 全てのデータベース処理が正しく完了しました。', PHP_EOL;

    } catch (Exception $e) {
        // 例外が発生すればロールバックされ、INSERT処理がなかったことになります。
        $pdo->rollback();
        echo '* 例外が起こったため、データベース処理をロールバックしました。';
    }
?>
</pre>
</body>
</html>