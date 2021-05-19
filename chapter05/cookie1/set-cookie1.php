<?php

declare(strict_types=1); 

setcookie("name1", 'value1', time() + 60 * 60, '/', '', false, true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クッキーの送出1 - honkaku</title>
</head>
<body>
    <p>PHPからクッキーを送出しました。</p>
</body>
</html>
