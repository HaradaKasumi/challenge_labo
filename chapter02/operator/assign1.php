<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>複合演算子 - honkaku</title>
</head>
<body>
    <?php
        $sum  = 3;
        $sum *= 5; // $sum = $sum * 5; と同じ意味

        $greeting  = 'Hello ';
        $greeting .= 'World.'; // $greeting = $greeting . 'World'; と同じ意味
    ?>
    <p>sum：<?=$sum?></p>
    <p>greeting：<?=$greeting?></p>
</body>
</html>
