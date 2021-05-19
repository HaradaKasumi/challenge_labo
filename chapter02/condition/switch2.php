<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>switch構文 - honkaku</title>
</head>
<body>
    <?php
        $number = 1;
        switch ($number) {
            case 0 :
                echo 'number=0の処理<br>';
            case 1 :
                echo 'number=1の処理<br>';
            case 2 :
                echo 'number=2の処理<br>';
            default :
                echo 'defaultの処理<br>';
        }
    ?>
</body>
</html>
