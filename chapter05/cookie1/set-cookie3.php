<?php

declare(strict_types=1); 

setcookie("name-as-map[key1]", 'value1', time() + 60 * 60, '/', '', false, true);
setcookie("name-as-map[key2]", 'value2', time() + 60 * 60, '/', '', false, true);
setcookie("name-as-map[key3]", 'value3', time() + 60 * 60, '/', '', false, true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クッキーの送出3 - honkaku</title>
</head>
<body>
    <p>PHPからクッキーを送出しました。</p>
</body>
</html>