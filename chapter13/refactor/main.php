<?php

require_once dirname(__FILE__) . '/classes/Canvas.php';
require_once dirname(__FILE__) . '/classes/Image.php';
require_once dirname(__FILE__) . '/classes/figure/Ellipse.php';
require_once dirname(__FILE__) . '/classes/figure/Rectangle.php';

$canvas = new MyApplication\Canvas(800, 500); // まっさらなキャンバスを初期化
$ellipse = new MyApplication\Figure\Ellipse(100, 200, '#FF0000'); // 楕円形データを作る
$canvas->putFigure($ellipse, 20, 30); // 楕円形データを(20, 30)の位置に配置する
$image = new MyApplication\Image('images/dummy.png'); // 画像データを作る
$canvas->putImage($image, 100, 300); // 画像データを(100, 300)の位置に配置する
$ellipseColor = $ellipse->getColorCode();