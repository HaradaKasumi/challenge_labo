<?php

namespace Office;

require_once dirname(__FILE__) . '/Word/Writer.php';
require_once dirname(__FILE__) . '/Excel/Writer.php';

// Office形式ファイルのファイルのメタデータを操作するクラス
class File
{
    public function setWordProperty() : void
    {
        $writer = new Word\Writer(); // Officeを起点にWordを相対パスで指定
        $writer->write();
    }

    public function setExcelProperty() : void
    {
        $writer = new Excel\Writer(); // Officeを起点にExcelを相対パスで指定
        $writer->write();
    }
}
