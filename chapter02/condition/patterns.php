<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>さまざまな条件式 - honkaku</title>
</head>
<p>
<?php
    // 単一の条件式の場合
    $score = 100;
    if ($score >=80){
        $message = '合格';
    }else{
        $message = '不合格';
    }
?>
<p><?php print $message;?></p>

<?php
    // 論理演算式の場合
    $score = -10;
    if ($score > 0 && $score >=80 ){
        $int = '整数で合格';
    }else{
        $int = '整数じゃない';
    }
?>
<p><?php print $int ;?></p>
<?php
    // 真偽を返す
    $score = '80';
    if (is_numeric($score)){
        $result = '数字です';
    }else{
        $result = '数字じゃない';
    }

?>
<p><?php print $result ;?></p>
<?php
    // 否定を使う
    $score = '234';
    if (!is_numeric($score)){
        $result = '数字じゃない';
    } else{
        $result = '数字';
    }
?>
<p><?php print $result ;?></p>
<?php
    $score =['test', 'test1', 'test2'];
    if (count($score) >= 3){
        $result = '3つ以上存在';
    }else if (count($score) >= 2){
        $result = '2つ以上存在';
    }else{
        $result = 'なし';
    }
?>
<p><?php print $result ;?></p>

</body>
</html>