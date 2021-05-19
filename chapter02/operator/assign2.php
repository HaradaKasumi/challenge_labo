<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>参照の代入 - honkaku</title>
</head>
<body>
    <?php
        // $greeting2には値ではなく参照が入ります。
        $greeting1 = 'Hello';
        $greeting2 = &$greeting1;
        $greeting1 = 'World';
    ?>
    <p>greeting1：<?=$greeting1?></p>
    <p>greeting2：<?=$greeting2?></p>
</body>
</html>
