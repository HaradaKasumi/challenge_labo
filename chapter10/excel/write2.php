<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Border;

$spreadsheet = new Spreadsheet();

// 全体のフォントサイズを12ポイントにします。
$spreadsheet->getDefaultStyle()->getFont()->setSize(12);

$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', '御見積書');
$sheet->getStyle('A1')->getFont()->setSize(20); // A1セルの文字サイズを20ポイントにする

$sheet->setCellValue('A2', '品名');
$sheet->setCellValue('B2', '数量');
$sheet->setCellValue('C2', '単価');
$sheet->setCellValue('D2', '製品No');

$sheet->setCellValue('A3', 'ノートPC');
$sheet->setCellValue('B3', 1);
$sheet->setCellValue('C3', 140000);
$sheet->setCellValueExplicit('D3', '000101', DataType::TYPE_STRING); // 先頭の0が消えないよう文字列型にする

$sheet->setCellValue('A4', 'マウス');
$sheet->setCellValue('B4', 2);
$sheet->setCellValue('C4', 800);
$sheet->setCellValueExplicit('D4', '000102', DataType::TYPE_STRING);

// 合計金額は通貨型に設定します。
$sheet->setCellValue('A5', '合計：');
$sheet->getStyle('B5')->getNumberFormat()->setFormatCode('"¥"#,##0');
$sheet->setCellValueExplicit('B5', 141600, DataType::TYPE_NUMERIC);

// A2～D4の範囲に含まれるセルの1つ1つに対して、繰り返し罫線を設定します。
$style = new Style();
$style->applyFromArray([
    'borders' => [
        'top'   =>  ['borderStyle' => Border::BORDER_THIN],
        'right' =>  ['borderStyle' => Border::BORDER_THIN],
        'bottom'=>  ['borderStyle' => Border::BORDER_THIN],
        'left'  =>  ['borderStyle' => Border::BORDER_THIN]
    ]
]);
$sheet->duplicateStyle($style, 'A2:D4');

// A2～D2のセルを黄色(16進数表記でFFFF00)の背景色にします。
$sheet->getStyle('A2:D2')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setRGB('FFFF00');

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="お見積書.xlsx"'); 
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
