<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>アサーション - honkaku</title>
</head>
<body>
<?php

    // アサーションを有効にし、アサーション違反時に例外がスローされるようにする。
    // 本来は、ini_setで設定せず、php.iniを直接書き換えることで設定します。
    ini_set('zend.assertions', '1');
    ini_set('assert.exception', '1');

    /**
     * 地図画像の指定された位置に、ピン画像を重ね合わせる。
     * @param integer ピンのX座標
     * @param integer ピンのY座標
     * @param string ピンの色。画面によって「red」「blue」「gray」のいずれかを指定する。
     * @return 生成された地図画像のファイル名
     */
    function dropPin(int $positionX, int $positionY, string $color): string
    {
        assert(in_array($color, ['red', 'blue', 'gray']));

        // 地図画像に、ピン画像を合成する何らかの処理がここに入る

        // 合成後画像のファイル名を返す
        return 'map-' . date('YmdHis') . '.png';
    }

    // これはアサーション違反にならず
    $mapFileName = dropPin(100, 200, 'red');

    // これはアサーション違反
    $mapFileName = dropPin(90, 260, 'yellow');
?>
</body>
</html>
