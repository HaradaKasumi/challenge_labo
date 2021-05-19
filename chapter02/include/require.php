<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>require命令 - honkaku</title>
</head>
<body>
    <?php require_once dirname(__FILE__) . '/files/functions.php'; ?>
    <h3>柳川 鰻太郎さんのプロフィールページ</h3>
    <ul>
        <li>氏名：柳川 鰻太郎</li>
        <li>年齢：<?=calcAge(19790401)?>歳</li>
        <li>居住：東京都</li>
    </ul>
</body>
</html>
