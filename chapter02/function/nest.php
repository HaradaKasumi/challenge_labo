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
        echo "<br />";



    // at coderの問題　ABC086A - Product  /積が奇数なら Odd と、 偶数なら Even と出力せよ。
        function OddOrEven(int $a, int $b):string
        {
            if (!is_numeric($a) || !is_numeric($b)){
                return '値が不正';
            }

            $score = $a + $b;
            if ($score % 2 === 0 ){
                return 'Even';
            } else{
                return 'Odd';
            }
        }


        $result = OddOrEven(5,6);
        echo $result;
        echo "<br />";

        // at coderの問題　ABC081A - Placing Marbles  1が出力された回数
        function checkOutput(int $input):int
        {
            $array = str_split($input);

            $length = count($array);
            $total = 0;

            for($i = 0; $i <= $length-1; $i++){
                if ($array[$i] == 1){ // ===だったとき
                    $total = $total +1;
                }elseif($array[$i] == 0){
                    continue;
                }
            }
            return $total;
        }

        $test = checkOutput(10101);
        echo $test;
        echo "<br />";

    ?>
</body>
</html>
