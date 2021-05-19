<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = IOFactory::load('template.xlsx');

$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A3', 'ノートPC');
$sheet->setCellValue('B3', 1);
$sheet->setCellValue('C3', 140000);
$sheet->setCellValue('D3', '000101');

$sheet->setCellValue('A4', 'マウス');
$sheet->setCellValue('B4', 2);
$sheet->setCellValue('C4', 800);
$sheet->setCellValue('D4', '000102');

$sheet->setCellValue('B5', 141600);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="お見積書-テンプレート使用版.xlsx"'); 
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

// 画面に出力する代わりにファイルに保存したい時は、以下のように書きます。
// $writer->save('sample.xlsx');
