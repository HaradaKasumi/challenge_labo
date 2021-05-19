<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>値の比較 - honkaku</title>
</head>
<body>
<pre>
<?php
    /* 以下は、abs関数をもちいた比較 */
    $a = 1.2340;
    $b = 1.2345;

    // 小数部1桁目までが等しければ等しいとみなす。結果：true
    var_dump(abs($a - $b) < 0.1);

    // 小数部2桁目までが等しければ等しいとみなす。結果：true
    var_dump(abs($a - $b) < 0.01);

    // 小数部3桁目までが等しければ等しいとみなす。結果：true
    var_dump(abs($a - $b) < 0.001);

    // 小数部4桁目までが等しければ等しいとみなす。結果：false
    var_dump(abs($a - $b) < 0.0001);

    // 小数部5桁目までが等しければ等しいとみなす。結果：false
    var_dump(abs($a - $b) < 0.00001);


    /* 以下は、bccomp関数をもちいた比較 */
    $c = '1.2340';
    $d = '1.2345';

    // 小数部1桁目までが等しければ等しいとみなす。結果：0
    var_dump(bccomp($c, $d, 1));

    // 小数部2桁目までが等しければ等しいとみなす。結果：0
    var_dump(bccomp($c, $d, 2));

    // 小数部3桁目までが等しければ等しいとみなす。結果：0
    var_dump(bccomp($c, $d, 3));

    // 小数部4桁目までが等しければ等しいとみなす。結果：-1
    var_dump(bccomp($c, $d, 4));

    // 小数部5桁目までが等しければ等しいとみなす。結果：-1
    var_dump(bccomp($c, $d, 5));
?>
</pre>
</body>
</html>
