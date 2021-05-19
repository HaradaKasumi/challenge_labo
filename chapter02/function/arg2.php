<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>引数のリファレンス渡し - honkaku</title>
</head>
<body>
    <?php
    // 標準入力
    $input1 = 3;
    $input2 = '8 12 40';
    $count = 0;
    // インプットの値を配列にする
    $input_edit = explode(' ', $input2);

    // インプットの値が全て偶数かどうかチェックして割れなかったら、保管
    foreach($input_edit as $value){
        if ($value %2 !==0){
            $count++;
        }
    }
    echo $count;
    // 2で割り切れたらカウントを増やす



    // 全て偶数だったら、2で割った値に置き換えて、カウントを1増やす
    // 何回わったか


    ?>
</body>
</html>
