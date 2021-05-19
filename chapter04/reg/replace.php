<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>正規表現による置換 - honkaku</title>
</head>
<body>
<pre>
<?php
    echo '●年月日をドット区切りからハイフン区切りに置換する', PHP_EOL;
    $diary = '2019.03.03 今日は雨が降っています.';
    $diary = preg_replace('/([0-9]{4})\.([0-9]{2})\.([0-9]{2})/u', '${1}-${2}-${3}', $diary);  // 結果：2019-03-03 今日は雨が降っています.
    echo $diary, PHP_EOL;

    echo '●[LINK]～[/LINK]の文字列を<a>タグに置換する', PHP_EOL;
    $diary = '今日は聖蹟桜ヶ丘を散歩しました。参考：[LINK]http://example.com/seiseki[/LINK]';
    $diary = preg_replace('/(\[LINK\])(http:\/\/.+)(\[\/LINK\])/ui', '<a href="${2}">${2}</a>', $diary);  // http://example.com/foodsが<a>タグで囲まれます
    echo $diary;
?>
</pre>
</body>
</html>