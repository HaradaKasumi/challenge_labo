<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>論理演算子と命令文の組み合わせ - honkaku</title>
</head>
<body>
    <?php
        // 以下のコメントを外すと、出力結果はwww.example.comになります。
        // define('URL_BASE', 'http://www.example.com');

        defined('URL_BASE') || define('URL_BASE', 'http://default.example.com');
        echo 'URL_BASE is: ', URL_BASE;
    ?>
</body>
</html>