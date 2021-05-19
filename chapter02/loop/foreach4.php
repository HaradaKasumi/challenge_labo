<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>foreachでリファレンス渡しを使ったループ - honkaku</title>
</head>
<body>
    <?php
        $colors = [
            'red'       => '赤',
            'blue'      => '青',
            'yellow'    => '黄'
        ];
        foreach ($colors as $key => &$value) {
            $value = 'カラー名：' . $value;
        }
        unset($value);
    ?>
    <pre><?php print_r($colors);?></pre>
</body>
</html>
