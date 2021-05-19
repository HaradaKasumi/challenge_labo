<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>範囲による配列生成 - honkaku</title>
</head>
<body>
<pre>
<?php
    $list = range(1, 15);           // 結果：1～15の配列
    print_r($list);

    $list = range(0, 100, 10);      // 結果：0,10,20,30...100の配列
    print_r($list);

    $list = range('a', 'e');        // 結果：a～eの配列
    print_r($list);

    $list = range('A', 'E');        // 結果：A～Eの配列
    print_r($list);
?>
</pre>
</body>
</html>