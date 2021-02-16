<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>foreachによる連想配列ループ - honkaku</title>
</head>
<body>
<?php

// 入力例1
// 4
// 5
// 101
// 204
// 301
// 401
// 501

// 思ったとおりに出力できない
$input_line = fgets(STDIN);
echo $input_line;
for ($i = 0; $i < $input_line; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), ' ', $s);
    $s = explode(' ', $s);
    echo $s[0];
}

?>
</body>
</html>
