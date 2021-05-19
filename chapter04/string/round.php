<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文字列を丸める - honkaku</title>
</head>
<body>
<pre>
<?php
    $item = '万能MIXER―ご自宅でかんたんにジュースやスムージー、なんとふりかけまで！';
    echo mb_strimwidth($item, 0, 20, '…'); // 結果：「万能MIXER―ご自宅で…」
?>
</pre>
</body>
</html>