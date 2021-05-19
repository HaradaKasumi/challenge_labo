<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字列を切り抜く - honkaku</title>
</head>
<body>
<pre>
<?php
    $sentence = '今日は,良い日です';
    var_dump(mb_substr($sentence, 4, 3));       // 結果：良い日
    var_dump(mb_substr($sentence, -5, 3));      // 結果：良い日
    var_dump(mb_substr($sentence, 4));          // 結果：良い日です

    var_dump(mb_strstr($sentence, '良', false));    // 結果：良い日です
    var_dump(mb_strstr($sentence, '日', false));    // 結果：日は,良い日です
    var_dump(mb_strstr($sentence, '日', true));     // 結果：今
?>
</pre>
</body>
</html>