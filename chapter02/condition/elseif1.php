<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>if～elseif～else構文 - honkaku</title>
</head>
<body>
    <?php
        $point = 55;
        $message = '通常スコアです。';
        if ($point >= 80) {
            $message = 'ハイスコアです。';
        } elseif ($point >= 50) {
            $message = 'ミドルスコアです。';
        }
    ?>
    <p>メッセージ：<?=$message?></p>
</body>
</html>
