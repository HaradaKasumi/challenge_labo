<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>チェック処理 - honkaku</title>
</head>
<body>
<pre>
<?php
    // 論理型のチェック
    var_dump(is_bool('true'));          // 結果：false
    var_dump(is_bool(true));            // 結果：true
    var_dump(is_bool(false));           // 結果：true

    // 数値型のチェック
    var_dump(is_int(123));              // 結果：true
    var_dump(is_int('123'));            // 結果：false
    var_dump(is_int(123.456));          // 結果：false

    // 数値または数字であるかのチェック
    var_dump(is_numeric(123));          // 結果：true
    var_dump(is_numeric('123'));        // 結果：true
    var_dump(is_numeric('123.456'));    // 結果：true
    var_dump(is_numeric('string'));     // 結果：false

    // オブジェクト型のチェック
    var_dump(is_object('object'));      // 結果：false
    var_dump(is_object(new stdClass()));// 結果：true

    // nullチェック
    var_dump(is_null(null));            // 結果：true
    var_dump(is_null(''));              // 結果：false
    var_dump(is_null(0));               // 結果：false
?>
</pre>
</body>
</html>
