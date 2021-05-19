<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>インターフェース2 - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Sky.php';
    require_once dirname(__FILE__) . '/Bird.php';
    require_once dirname(__FILE__) . '/Airplane.php';

    // 空を用意する
    $sky = new Sky();

    // 鳥を用意して、空に配置する
    $bird = new Bird();
    $sky->draw($bird);

    // 飛行機を用意して、空に配置する
    $airplane = new Airplane();
    $sky->draw($airplane);
?>
</body>
</html>
