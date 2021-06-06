<?php

declare(strict_types=1);


$pdfFiles = [
    1 => 'テスト.pdf',
    2 => 'sample2.pdf',
    3 => 'sample3.pdf',
];

if (!isset($_GET['type']) || !isset($pdfFiles[$_GET['type']])){
    exit;
}

$file = $pdfFiles[$_GET['type']];

// ダウンロードのファイルサイズ
header('Content-Length: ' . filesize($file));
// ファイルメディア形式　MIMEタイプを指定
header('Content-Type: application/octet-stream');
// クライアントにどのような名前でダウンロードさせたいか
header('Content-Disposition: attachment; filename='. $file);
// ファイルデータを出力
readfile($file);
