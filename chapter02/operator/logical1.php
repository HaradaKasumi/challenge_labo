<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>複合的な条件を表す - honkaku</title>
</head>
<body>
<pre>
<?php
    $temperature = 39; // 現在の水温は39℃です

    // 適温の範囲「内」であるかを調べる
    $isSuitable = $temperature >= 40 && $temperature <= 41;
    var_dump($isSuitable);      // 結果：false

    // 適温の範囲「外」であるかを調べる(1)
    $isNotSuitable = $temperature < 40 || $temperature > 41;
    var_dump($isNotSuitable);   // 結果：true

    // 適温の範囲「外」であるかを調べる(2)
    $isNotSuitable = !($temperature >= 40 && $temperature <= 41);
    var_dump($isNotSuitable);   // 結果：true
?>
</pre>
</body>
</html>
