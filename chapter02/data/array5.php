<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>配列の要素をスカラー変数に割り当てる - honkaku</title>
</head>
<body>
    <?php
        $userData = [12345, 'Tarou Yamada', 'Tokyo', 32];
        list($id, $name, $prefecture, $age) = $userData;
    ?>
    <p>ユーザID：<?=$id?></p>
    <p>ユーザ名：<?=$name?></p>
    <p>都道府県：<?=$prefecture?></p>
    <p>年齢：<?=$age?></p>
</body>
</html>
