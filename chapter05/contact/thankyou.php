<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>入力フォーム - honkaku</title>
</head>
<body>
    <?php

    ?>

<h2>お問い合わせありがとうございます</h2>
<table>
    <tr>
        <th>お名前</th>
        <td><?php echo $_POST['name'];?></td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td><?php echo $_POST['mail'];?></td>
    </tr>
    <tr>
        <th>地域</th>
        <td><?php echo $_POST['area'];?></td>
    </tr>
    <tr>
        <th>お問い合わせ種別</th>
        <td><?php echo $_POST['type'];?></td>
    </tr>
    <tr>
        <th>お問い合わせ内容</th>
        <td><?php echo $_POST['detail'];?></td>
    </tr>
    <tr>
        <th>メール配信希望</th>
        <td><?php echo $_POST['news_type'];?></td>
    </tr>
</table>
</body>
</html>
