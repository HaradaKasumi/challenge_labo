<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>関数から別の関数をコール - honkaku</title>
</head>
<body>
    <?php
        /* 正の整数であれば真、そうでなければ偽を返す関数 */
        function checkNumber(int $number):bool
        {
            if (!is_numeric($number) && $number > 0){
                return FALSE;
            }
            return TRUE;
        }


        /* 2つの数値を足し算して返す関数 */
        function add(int $a, int $b) // false または int
        {
            if (FALSE === checkNumber($a) || FALSE === checkNumber($b)){
                return FALSE;
            }
            $result = $a + $b;
            return $result;
        }

        // メインルーチン
        $result = add(40, 40);
        echo $result;

        // バブルソート
        $array = array(9,2,8,3,7,4,6,5,1);
        $length = count($array);

        // 配列の長さだけループ
        for ($i=0 ; $i<$length ; $i++){

        }


    ?>
</body>
</html>
