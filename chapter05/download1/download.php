<?php

declare(strict_types=1);

$pdfFiles = [
    1 => 'sample1.pdf',
    2 => 'sample2.pdf',
    3 => 'sample3.pdf'
];
if (!isset($_GET['type']) || !isset($pdfFiles[$_GET['type']])) {
    exit;
}
$file = $pdfFiles[$_GET['type']];

header('Content-Length: ' . filesize($file));
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='. $file);
readfile($file);

// ここで、PHPタグを閉じないように注意しましょう。
// HTTPレスポンスボディとして出力されるファイルデータに、余計な改行コードが入ってしまう危険があります。
// 同じ理由で、PHPタグの開始前にも改行を入れないようにし、UTF-8(BOMなし)で保存しましょう。
