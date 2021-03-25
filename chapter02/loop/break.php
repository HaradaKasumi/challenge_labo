<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>break・continueによるループ制御 - honkaku</title>
</head>
<body>
<pre>
<?php
    $total = 0;
    $numbers = [10, 2, -5, 3, 'abc', 6, 1];
    echo '正の整数を対象に配列の要素を足し算します...', PHP_EOL;
    foreach($numbers as $number){
            if (!is_numeric($number)){
                // continue; //17
                break; //10
            }
            $total = $total + $number;
    }
    echo $total;
?>
</pre>
</body>
</html>
