<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>値の比較 - honkaku</title>
</head>
<body>
<?php $point = 85; ?>
<pre>
<?php
    var_dump($point <=> 85); // 0
    var_dump($point <=> 70); // 1
    var_dump($point <=> 99); // -1
?>
</pre>
</body>
</html>
