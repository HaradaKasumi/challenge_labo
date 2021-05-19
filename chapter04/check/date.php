<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>日付チェック処理 - honkaku</title>
</head>
<body>
<pre>
<?php
    var_dump(checkdate(12, 31, 2018));  // 結果：true
    var_dump(checkdate(8, 99, 2018));   // 結果：false
    var_dump(checkdate(2, 29, 2020));   // 結果：true
    var_dump(checkdate(2, 29, 2019));   // 結果：false
?>
</pre>
</body>
</html>
