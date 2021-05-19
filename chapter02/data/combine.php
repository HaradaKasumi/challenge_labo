<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字列結合 - honkaku</title>
</head>
<body>
    <?php
        $value = 'World';

        // 文字列演算子(.)による値と変数の連結。
        $combined1 = 'Hello ' . $value . '！';

        // 変数の展開。シングルクオートでは使用不可。
        $combined2 = "Hello {$value}！";

        // 代入演算子(=)と文字列演算子(.)の組み合わせ。
        $combined3  = 'Hello ';
        $combined3 .= $value;
        $combined3 .= '！';

        // シングルクオート内では変数は展開されない。
        $combined4 = 'Hello {$value}！';
    ?>
    <p><?=$combined1?></p>
    <p><?=$combined2?></p>
    <p><?=$combined3?></p>
    <p><?=$combined4?></p>
</body>
</html>
