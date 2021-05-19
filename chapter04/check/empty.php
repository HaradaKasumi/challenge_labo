<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>空チェック - honkaku</title>
</head>
<body>
<pre>
<?php
    var_dump(empty(0));     // 結果：true
    var_dump(empty('0'));   // 結果：true
    var_dump(empty('a'));   // 結果：false
    var_dump(empty(0.1));   // 結果：false
    var_dump(empty(0.0));   // 結果：true
    var_dump(empty(''));    // 結果：true
    var_dump(empty(null));  // 結果：true
    var_dump(empty([]));    // 結果：true
    var_dump(empty(true));  // 結果：false
    var_dump(empty(false)); // 結果：true
?>
</pre>
</body>
</html>
