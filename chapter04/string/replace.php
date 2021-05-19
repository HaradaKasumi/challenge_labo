<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字列を置換する - honkaku</title>
</head>
<body>
<pre>
<?php
    $sentence = '今日は、良い日です';
    var_dump(str_replace('今日', 'あした', $sentence)); // 結果：あしたは、良い日です

    $sentences = <<< TEXT
いろはにほへと　ちりぬるを
わかよたれそ　つねならむ
TEXT;
    var_dump(str_replace(["\r\n", "\r", "\n"], '', $sentences)); // 改行が除去された$sentencesを出力
?>
</pre>
</body>
</html>