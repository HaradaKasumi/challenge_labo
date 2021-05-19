<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>値のバインド - honkaku</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__) . '/functions.php';

        try {
            $pdo = connect();
        } catch (PDOException $e) {
            echo '接続に失敗しました。';
            return;
        }

        // bindValueによるINSERT文の実行
        $title = null;
        $statement = $pdo->prepare('INSERT INTO books(created, title) VALUES(CURRENT_TIMESTAMP, :title)');
        for ($i = 1; $i <= 3; $i++) {
            $title = 'TEST BOOK ' . $i . '(bindValue)';
            $statement->bindValue(':title', $title, PDO::PARAM_STR);
            $statement->execute();
        }

        // bindParamによるINSERT文の実行
        $title = null;
        $statement = $pdo->prepare('INSERT INTO books(created, title) VALUES(CURRENT_TIMESTAMP, :title)');
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        for ($i = 1; $i <= 3; $i++) {
            $title = 'TEST BOOK ' . $i . '(bindParam)';
            $statement->execute();
        }

        echo '登録完了しました';
    ?>
</body>
</html>