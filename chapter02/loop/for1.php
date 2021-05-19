<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>forによる回数指定のループ - honkaku</title>
</head>
<body>
<pre>
<?php
    for ($i = 1; $i <= 3; $i++) {
        echo "Hello!({$i}回目)", PHP_EOL;
    }
    $array1 = ['test', 'test1', 'test2', 'test3'];
    $array2 = ['test1', 'test2', 'test3'];

    $result= array_diff($array1, $array2);
    var_dump($result);
//    foreach ($result as $value){
//        echo $value;
//    }
    ?>
</pre>
</body>
</html>
