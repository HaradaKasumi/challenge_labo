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
    var_dump($point == 85); // true
    var_dump($point == '85'); // true
    var_dump($point === 85); // true
    var_dump($point === '85'); // false
    var_dump($point != 85); // false 
    var_dump($point != '85'); // false 
    var_dump($point !== 85); // false
    var_dump($point !== '85'); // true
    var_dump($point > 85); // false
    var_dump($point >= 85); // true
    var_dump($point > '85'); // false
    var_dump($point >= '85'); // true
?>
</pre>
</body>
</html>
