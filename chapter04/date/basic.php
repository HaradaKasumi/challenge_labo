<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DateTimeインスタンスを作る - honkaku</title>
</head>
<body>
<pre>
<?php
    // タイムゾーンをAsia/Tokyoにする。
    // デフォルトでは、php.iniのdate.timezone値が使われる。
    date_default_timezone_set('Asia/Tokyo');

    echo '●現在の日時：', date('Y-m-d H:i:s'), PHP_EOL;

    // 日時指定でインスタンスを作る
    $dateTime = new DateTime('2019-02-25 17:12:34');
    echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.02.25 17:12:34

    // インスタンスを変数として保存する必要がなければ、以下のように1ステップでも出力できる
    echo (new DateTime('2019-02-25 17:12:34'))->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.02.25 17:12:34

    // 現在日時を元にしたインスタンスを作る
    $dateTime = new DateTime();
    echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL; // 結果：<現在の年月日> <現在の時分秒>

    // 現在日時の3時間後のインスタンスを作る
    $dateTime = new DateTime('+3 hours');
    echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL; // 結果：<3時間後の年月日> <3時間後の時分秒>

    // 現在日時でインスタンスを作った後、年月日のみを上書き指定する
    $dateTime = new DateTime();
    $dateTime->setDate(2019, 2, 25);
    echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.02.25 <現在の時分秒>

    // 現在日時でインスタンスを作った後、年月日と時分秒を上書き指定する
    $dateTime = new DateTime();
    $dateTime->setDate(2019, 2, 25)->setTime(17, 12, 34);
    echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.02.25 17:12:34

    // 2019-02-25 17:12:34のインスタンスを作った後、5日+12時間未来に進める
    echo (new DateTime('2019-02-25 17:12:34'))
            ->modify('+5 days')
            ->modify('+12 hours')
            ->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.03.03 05:12:34

    // 2019-02-25 17:12:34のインスタンスを作った後、次の土曜日まで進め、時刻を00:00:00にする
    echo (new DateTime('2019-02-25 17:12:34'))
            ->modify('Next Saturday')
            ->setTime(0, 0, 0)
            ->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.03.02 00:00:00


    // 2019-02-25 17:12:34のインスタンスを作った後、タイムゾーンをUTCに変更して出力する。
    // UTCは日本標準時よりも9時間早いため、17:12:34の9時間前の時刻が出力される。
    $dateTime = new DateTime('2019-02-25 17:12:34');
    $dateTime->setTimeZone(new DateTimeZone('UTC'));
    echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL; // 結果：2019.02.25 08:12:34
?>
</pre>
</body>
</html>