<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>foreachによる配列ループ - honkaku</title>
</head>
<body>
<?php
    // 配列をループ
    $colors  =['red', 'blue', 'green'];
    foreach($colors as $color){
        echo $color;
    }
    foreach ($colors as $key => $color){
        echo $key . $color;
    }

    // 連想配列をループ
    $colors = [
            'red' => 'aka',
            'blue' => 'ao',
            'green' => 'midori',
    ];

    foreach ($colors as $key => $value){
           echo 'キー:'.$key. '要素:'.$value;
    }

    // 0より小さいときだけ出力
    $numbers = [1, -5, 4, -2];

    foreach ($numbers as $number){
        if ($number < 0 ){
            echo $number;
        }
    }


?>
</body>
</html>
