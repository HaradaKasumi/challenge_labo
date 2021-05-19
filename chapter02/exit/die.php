<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>exitとdie - honkaku</title>
</head>
<body>
    <?php
        $score = -100;
        if ($score < 0) {
            die('スコアは正の数でなければなりません。'); // 出力して終了
        }
        echo 'スコアは：', $score, '点です。'; // この命令は実行されない
    ?>
</body>
</html>
