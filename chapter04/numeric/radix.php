<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>基数を変換する - honkaku</title>
</head>
<body>
<pre>
<?php
    // 10進数と2進数の相互変換。
    echo base_convert('123', 10, 2), PHP_EOL; // 結果：1111011
    echo base_convert('1111011', 2, 10), PHP_EOL; // 結果：123

    // 16進数から10進数への変換。
    // ffc0cbはpinkを表す、16進数カラーコード。
    // このカラーコードを2桁ずつ区切って10進数に変換することで、
    // 「R：255、G：192、B：203」というRGB値を求めることができる。
    echo base_convert('ff', 16, 10), PHP_EOL; // 結果：255
    echo base_convert('c0', 16, 10), PHP_EOL; // 結果：192
    echo base_convert('cb', 16, 10), PHP_EOL; // 結果：203

    // 8進数から2進数への変換。
    // 0755はUNIX系OSで使うパーミッション値。
    // これを2進数に変換することで、ファイルへのアクセス権限を表すビットパターンを得ることができる。
    echo base_convert('0754', 8, 2), PHP_EOL; // 結果：111101100
?>
</pre>
</body>
</html>