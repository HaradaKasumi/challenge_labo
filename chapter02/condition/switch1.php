<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>switch構文 - honkaku</title>
</head>
<body>
    <?php
       $message = ''; // 答えみて追記。なくても動く
       $result = 'gif';
       switch ($result){
           case 'ping':
               $message = 'pingの画像';
               break;
           case 'gif':
               $message = 'gifの画像';
               break;
           case 'jpg':
               $message = 'jpgの画像';
               break;
           default:
               $message = '不正';
       }

//       // case の後ろの変数値は、変数の中の値を
//       switch ($result){
//           case $result = 'ping':
//               $message = 'ping画像です';
//               break;
//           case $result = 'gif':
//               $message = 'gif画像です';
//               break;
//           case $result = 'jpg':
//               $message = 'jpg画像です';
//               break;
//       }

//    // これと同じ
//       if ($result === 'gif'){
//           $message = 'gifの画像。if文から出力';
//       } elseif ($result === 'ping'){
//           $message = 'pingの画像。if文から';
//       }
    ?>
    <p>メッセージ：<?= print $message;?></p>
</body>
</html>
