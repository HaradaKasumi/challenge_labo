<?php

namespace Office;

require_once dirname(__FILE__) . '/Word/Writer.php';
require_once dirname(__FILE__) . '/Excel/Writer.php';

// Office�`���t�@�C���̃t�@�C���̃��^�f�[�^�𑀍삷��N���X
class File
{
    public function setWordProperty() : void
    {
        $writer = new Word\Writer(); // Office���N�_��Word�𑊑΃p�X�Ŏw��
        $writer->write();
    }

    public function setExcelProperty() : void
    {
        $writer = new Excel\Writer(); // Office���N�_��Excel�𑊑΃p�X�Ŏw��
        $writer->write();
    }
}
