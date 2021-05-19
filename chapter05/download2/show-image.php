<?php 

declare(strict_types=1); 

$images = [
    'circle' => 'circle.png',
    'triangle' => 'triangle.png'
];
if (!isset($_GET['type']) || !isset($images[$_GET['type']])) {
    exit;
}
$file = $images[$_GET['type']];
header('Content-Length: ' . filesize($file));
header('Content-Type: image/png');
readfile($file);

// ここでも、PHPタグを閉じないようにしましょう。