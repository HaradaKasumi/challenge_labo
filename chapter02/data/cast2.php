<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>関数によるキャスト - honkaku</title>
</head>
<body>
<pre>
<?php
    var_dump(strval(1234));     // string '1234'
    var_dump(intval(1234.5));   // int 1234
    var_dump(strval(true));     // string '1'
    var_dump(strval(false));    // string ''
    var_dump(boolval('true'));  // bool true
    var_dump(boolval('false')); // bool true
    var_dump(boolval(0));       // bool false
    var_dump(boolval(1));       // bool true
    var_dump(boolval(-1));      // bool true
?>
</pre>
</body>
</html>
