<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>if～elseif～else構文 - honkaku</title>
</head>
<body>
    <?php
        $bool1 = false;
        $bool2 = true;
        $bool3 = true;
        if ($bool1 === true) {
            echo '$bool1は真です。';
        } elseif ($bool2 === true) {
            echo '$bool2は真です。';
        } elseif ($bool3 === true) {
            echo '$bool3は真です。';
        }
    ?>
</body>
</html>
