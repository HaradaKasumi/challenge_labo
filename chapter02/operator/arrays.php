<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列の合成 - honkaku</title>
</head>
<body>
<pre>
<?php
    /* 配列を合成します */
    $arr1 = ['a', 'b'];
    $arr2 = ['d', 'e', 'f'];
    $mergedA = $arr1 + $arr2;
    $mergedB = $arr2 + $arr1;
    $mergedC = array_merge($arr1, $arr2);
    $mergedD = array_merge($arr2, $arr1);
?>
<p>●配列の合成結果：</p>
* merged A: <?php print_r($mergedA)?>
* merged B: <?php print_r($mergedB)?>
* merged C: <?php print_r($mergedC)?>
* merged D: <?php print_r($mergedD)?>

<?php
    /* 連想配列を合成します */
    $arr3 = [
        'a' => 'value A',
        'b' => 'value B',
    ];
    $arr4 = [
        'a' => 'value C',
        'b' => 'value D',
        'c' => 'value E',
    ];
    $mergedE = $arr3 + $arr4;
    $mergedF = $arr4 + $arr3;
    $mergedG = array_merge($arr3, $arr4);
    $mergedH = array_merge($arr4, $arr3);
?>
<p>●連想配列の合成結果：<p>
* merged E: <?php print_r($mergedE)?>
* merged F: <?php print_r($mergedF)?>
* merged G: <?php print_r($mergedG)?>
* merged H: <?php print_r($mergedH)?>
</pre>
</body>
</html>
