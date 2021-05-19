<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>日時のフォーマット - honkaku</title>
</head>
<body>
<pre>
<?php
    // タイムゾーンをAsia/Tokyoにする。
    // デフォルトでは、php.iniのdate.timezone値が使われる。
    date_default_timezone_set('Asia/Tokyo');

    $date = new DateTime('2019-02-25 17:12:34');

    // フォーマット文字列を指定する例
    echo $date->format('Y.m.d H:i:s')           , PHP_EOL; // 結果：2019.02.25 17:12:34
    echo $date->format('Y/m/d H:i')             , PHP_EOL; // 結果：2019/02/25 17:12
    echo $date->format('Y年m月d日(D) H時i分')   , PHP_EOL; // 結果：2019年02月25日(Mon) 17時12分
    echo $date->format('Y.m.t')                 , PHP_EOL; // 結果：2019.02.28(2019年2月の末日)
    echo $date->format('U')                     , PHP_EOL; // 結果：1551082354

    // DateTimeにあらかじめ用意されたフォーマット定数を使う例
    echo $date->format(DateTime::ATOM)          , PHP_EOL; // 結果：2019-02-25T17:12:34+09:00
    echo $date->format(DateTime::COOKIE)        , PHP_EOL; // 結果：Monday, 25-Feb-2019 17:12:34 JST

    // 協定世界時(UTC)にタイムゾーンを変更する(UTCはAsia/Tokyoよりも9時間早い)
    $date->setTimezone(new DateTimeZone('UTC'));
    echo $date->format('Y.m.d H:i:s')           , PHP_EOL; // 結果：2019.02.25 08:12:34
?>
</pre>
</body>
</html>