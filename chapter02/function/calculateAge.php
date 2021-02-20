<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>引数の値渡し - honkaku</title>
</head>
<body>
    <?php
   // 年齢計算機
   function calculateAge(int $date, int $birthday):int
   {

       if (!preg_match('/^([0-9]{8})$/', $date)){
           echo 'error';
       }

       $age = $date - $birthday;
       $value = $age / 10000;
       return floor($value);
   }

   $test = calculateAge(20200202, 19990909);
   echo $test;

    // 拡張子チェッカー
    function extension(string $extension):string
    {
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' ){
            return $extension;
        }else {
            return 'not found';
        }
    }

    $result = extension('gif');
    echo $result;
    ?>
</body>
</html>
