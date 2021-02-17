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
    // 3ヶ月の気温
    $temperatures = [25.7, 27.2, 26.3, 28.8, 30.5, 27.9, 29.5, 28.6, 28.5, 31.0, 24.8, 29.8, 26.3, 25.5, 29.2, 30.4, 30.3, 29.3, 26.3, 29.9, 30.3, 28.1, 32.0, 31.8, 32.1, 34.1, 29.1, 31.7, 32.9, 33.1, 34.8, 35.2, 36.5, 34.1, 33.0, 36.2, 34.9, 34.0, 32.3, 33.3, 34.5, 34.4, 36.7, 36.6, 35.6, 32.2, 31.2, 33.2, 33.7, 31.1, 30.6, 31.7, 31.9, 29.3, 28.9, 30.5, 29.6, 26.9, 27.5, 29.8, 28.2, 28.4, 29.0, 31.8, 31.2, 32.5, 33.2, 33.7, 34.7, 35.1, 32.3, 33.4, 32.7, 30.6, 26.9, 31.6, 32.5, 32.0, 31.9, 30.7, 27.6, 27.2, 25.1, 28.5, 28.9, 25.5, 28.4, 30.1, 29.2, 29.0, 29.9, 30.6];
    foreach ($temperatures as $temperature){
        print $temperature;
        echo "<br />";

    }

    echo 'ここから';
    echo "<br />";
//     日数＝0
// 「data.csv」を開く。# --- (*1)
// CSV取得して反復
// 　　Ｆ日付＝それ[0]。
// 　　Ｆ平均＝それ[1]。
// 　　Ｆ最高＝それ[2] #---(*2)
// 　　もし、Ｆ最高≧30ならば  # --- (*3)
// 　　　日数＝日数＋1。
// 　　　　Ｆ日付を表示。
// 　　ここまで。
// ここまで。
// 「10年で30度越の日は{日数}日ありました」と表示。

    // 30度を超えた日
    foreach ($temperatures as $temperature){
        if ($temperature >= 30){
            print $temperature;
            echo "<br />";
        }
    }
    // 30度を超えた日が5日連続した回数
    // 30度を超えた日が連続したのが一番長い

    for($i =0; $i <=3; $i++){
        echo $i;
        if ($i == 3){
            echo '最後の処理'.$i;
        }
    }

    echo "<br />";

    // 九九
    for ($i = 1; $i <= 9; $i++){
        echo "<br />";
        for ($j = 1; $j <= 9; $j++){
            echo $i.'*'.$j.'='.$i*$j;
        }
    }

    echo "<br />";
    // 配列のなかに5が存在するかしないか
    $scores = [9, 8, 7, -6, -7, 5, 3, 10, 0, 7, -3, 1];
    foreach($scores as $score){
        if (in_array(5, $scores)){
            $message = '5が存在する';
        } else{
            $message = 'しない';
        }
    }
    echo $message;

    echo "<br />";
    // 最大値チェック
    echo max($scores);
    echo min($scores);

    // 一致するかチェック:int
    $test = 'aiuqeo';
    $test1 = 'aiueo';
    if (strcmp($test, $test1) === 0){
        echo '同じ';
    } else {
        echo '違う';
    }

    // while
    $score = 100;
    while($score < 1000){
        $score= $score +100;
    }
    echo $score;

?>
</body>
</html>
