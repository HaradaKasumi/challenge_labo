<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>トレイト - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/MemberModel.php';
    $memberModel = new MemberModel();
    $memberModel->create('001'); // ID「001」の会員を新規作成する
    $memberModel->delete('001'); // ID「001」の会員を削除する
    echo nl2br(file_get_contents('MemberModel.log')); // MemberModelが生成したログを画面に表示する
?>
</body>
</html>
