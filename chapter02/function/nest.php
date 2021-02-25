<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>関数から別の関数をコール - honkaku</title>
</head>
<body>
    <?php
        /* 正の整数であれば真、そうでなければ偽を返す関数 */
        function checkNumber(int $number)
        {
            if (!is_numeric($number) && $number > 0){
                return FALSE;
            }
            return $number;
        }

        $result = checkNumber(4);
        echo $result;

        /* 2つの数値を足し算して返す関数 */


        // メインルーチン

        // バブルソート
        $array=array(9,2,8,3,7,4,6,5,1);
        $length=count($array);


    ?>
</body>
</html>
