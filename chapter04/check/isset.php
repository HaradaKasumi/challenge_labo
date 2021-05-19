<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>変数の存在チェック - honkaku</title>
</head>
<body>
<pre>
<?php
    // スカラー変数に対するチェック
    $a = 'a';
    var_dump(isset($a));            // 結果：true
    var_dump(isset($b));            // 結果：false

    $z = null;
    var_dump(isset($z));            // 結果：false

    // 配列のキーに対するチェック
    $chars = ['a', 'i', 'u'];
    var_dump(isset($chars));      // 結果：true
    var_dump(isset($chars[0]));   // 結果：true
    var_dump(isset($chars[1]));   // 結果：true
    var_dump(isset($chars[2]));   // 結果：true
    var_dump(isset($chars[3]));   // 結果：false
    var_dump(array_key_exists(0, $chars));   // 結果：true
    var_dump(array_key_exists(3, $chars));   // 結果：false

    // 連想配列のキーに対するチェック
    $chars = [
        'a' => 'あ',
        'i' => 'い',
        'u' => 'う',
        'e' => null,
        'o' => 'お'
    ];
    var_dump(isset($chars['a']));   // 結果：true
    var_dump(isset($chars['e']));   // 結果：false
    var_dump(isset($chars[0]));     // 結果：false
    var_dump(array_key_exists('a', $chars));   // 結果：true
    var_dump(array_key_exists('e', $chars));   // 結果：true(値がnullでもtrue)

?>
</pre>
</body>
</html>
