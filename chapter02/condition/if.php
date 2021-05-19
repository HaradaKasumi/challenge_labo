<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>if文 - honkaku</title>
</head>
<body>
    <?php
       $score = 90;
       if ($score >= 80){
           $message = '優秀';
       } else if ($score >= 60){
           $message = '普通';
       } else{
           $message = '不合格';
       }
    ?>
    <p>メッセージ：<?=$message?></p>
</body>
</html>
