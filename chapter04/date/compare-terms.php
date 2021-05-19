<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>期間の重なり判定 - honkaku</title>
</head>
<body>
<pre>
<?php
    // 期間1は、2019-02-01～2019-02-28
    $term1Start = new DateTime('2019-02-01 00:00:00');
    $term1End = new DateTime('2019-02-28 23:59:59');

    // 期間2は、2019-01-01～2019-02-10
    $term2Start = new DateTime('2019-01-01 00:00:00');
    $term2End = new DateTime('2019-02-10 23:59:59');

    // 期間1(開始) <= 期間2(終了) && 期間1(終了) >= 期間2(開始)
    if ($term1Start <= $term2End && $term1End >= $term2Start) {
        echo '2つの期間は重なりあっています', PHP_EOL;              // こちらが出力される
    } else {
        echo '2つの期間は重なりあっていません', PHP_EOL;
    }
?>
</pre>
</body>
</html>