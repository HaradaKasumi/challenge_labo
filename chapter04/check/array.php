<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列の要素値の存在チェック - honkaku</title>
</head>
<body>
<pre>
<?php
    $chars = ['a', 'i', 'u', 'e', 'o'];
    var_dump(in_array('u', $chars, true));      // 結果：true
    var_dump(in_array('U', $chars, true));      // 結果：false(大文字小文字は区別)
    var_dump(in_array('n', $chars, true));      // 結果：false
    var_dump(in_array(0, $chars, true));        // 結果：false

    $chars = [
        'a' => 'あ',
        'i' => 'い',
        'u' => 'う',
        'e' => 'え',
        'o' => 'お'
    ];
    var_dump(in_array('a', $chars, true));      // 結果：false(キーは見ない)
    var_dump(in_array('n', $chars, true));      // 結果：false(キーは見ない)
    var_dump(in_array('あ', $chars, true));     // 結果：true
    var_dump(in_array('ん', $chars, true));     // 結果：false
?>
</pre>
</body>
</html>
