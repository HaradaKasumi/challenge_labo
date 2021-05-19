<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>if～else構文 - honkaku</title>
</head>
<body>
    <?php
        $point = 20;
        if ($point >= 80) {
            $message = 'ハイスコアです。';
        } elseif ($point >= 50) {
            $message = 'ミドルスコアです。';
        } else {
            $message = '通常スコアです。';
        }
    ?>
    <p>メッセージ：<?=$message?></p>
    <p>メッセージ：<?=$message?></p>
</body>
</html>
