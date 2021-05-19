<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>whileによる条件ループ - honkaku</title>
</head>
<body>
<pre>
<?php
    $num = 100;
    while ($num < 200) {
        echo $num, PHP_EOL;
        $num += 30;
    }
    echo '$numが200を超えたためループを抜けました。';
?>
</pre>
</body>
</html>
