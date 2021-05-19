<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>神経衰弱ゲーム - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/MemoryGame.php';
    $memoryGame = new MemoryGame();

    // 10番目のカードと25番目のカードが同じ値なら「HIT !」を表示。
    if ($memoryGame->isHit(10, 25) === true) {
        echo 'HIT !', PHP_EOL;
    } else {
        echo 'NOT HIT !', PHP_EOL;
    }
?>
</pre>
</body>
</html>
