<?php

ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Border;

// 処理開始時間を控えておく
$startTime = microtime(true);

// Excel出力する
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// GETパラメータでループ回数が指定されていればその回数分繰り返す(デフォルト1000回)
$maxLoopCount = isset($_GET['loop']) && intval($_GET['loop']) > 0 ? intval($_GET['loop']) : 1000;

foreach (range('A', 'Z') as $char) {
    for ($line = 0; $line <= $maxLoopCount; $line++) {
        $sheet->setCellValue($char . $line, "データ{$char}{$line}");
    }
}

// ファイルに保存
$writer = new Xlsx($spreadsheet);
$filename = date('Y-m-d-H-i-s') . '.xlsx';
$writer->save('output/' . $filename);

// 処理に要した時間を計算する
$elapsed = microtime(true) - $startTime;
echo "<p id='time'>処理時間：{$elapsed}秒</p>";

// 最大使用メモリ量を表示する
$memoryUsage = memory_get_peak_usage() / (1024 * 1024);
echo "<p id='mem'>使用メモリ量：{$memoryUsage}MB</p>\n";

