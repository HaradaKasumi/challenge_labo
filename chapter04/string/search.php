<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字を検索する - honkaku</title>
</head>
<body>
<pre>
<?php
    $sentence = '今日は、良い日です';
    var_dump(mb_strpos($sentence, '日'));       // 結果：1
    var_dump(mb_strpos($sentence, '無'));       // 結果：false
    var_dump(mb_strpos($sentence, '良い日'));   // 結果：4
    var_dump(mb_strrpos($sentence, '日'));      // 結果：6

    if (mb_strpos($sentence, '日')) {
        echo '引数$sentenceの中に「日」が見つかりました。', PHP_EOL;        // こちらのブロックに入ります。
    } else {
        echo '引数$sentenceの中に「日」は見つかりませんでした。', PHP_EOL;
    }
?>
</pre>
</body>
</html>