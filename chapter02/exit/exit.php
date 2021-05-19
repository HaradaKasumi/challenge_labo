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
            echo 'スコアは正の数でなければなりません。';
            exit(1); // 終了コード1を返して終了
        }
        echo 'スコアは：', $score, '点です。'; // この命令は実行されない
    ?>
</body>
</html>
