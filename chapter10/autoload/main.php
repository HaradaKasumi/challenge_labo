<?php

declare(strict_types=1);

/*
require_once dirname(__FILE__) . '/vendor/autoload.php';
*/

require_once dirname(__FILE__) . '/library/map/image/SatelliteMapImage.php';
require_once dirname(__FILE__) . '/library/map/pin/GenericPin.php';
require_once dirname(__FILE__) . '/library/map/Map.php';

use MyApplication\Map\Image\SatelliteMapImage;
use MyApplication\Map\Pin\GenericPin;
use MyApplication\Map\Map;

// 緯度経度の情報
$points = [
    'tokyo' => [35.681236, 139.767125], // 東京駅の緯度経度
];

// 東京駅を表す赤いピン画像を作る
$pin1 = new GenericPin(30, 'red');
$pin1->setMessage('ここは東京駅');

// 衛星画像を表すMapImageインスタンスを作る。これはMapクラスのコンストラクタに渡す。
$mapImage = new SatelliteMapImage();

// 東京駅を中心とした地図を作る
$map = new Map($mapImage, true, 3, $points['tokyo'][0], $points['tokyo'][1]);

// 赤のピンを東京駅に置く
$map->addPin($pin1, $points['tokyo'][0], $points['tokyo'][1]);

// 完成した地図を表示する
$map->draw();
