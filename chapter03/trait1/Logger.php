<?php

declare(strict_types=1);

// ログ出力クラス
class Logger
{
    // ログファイル名
    private $logfilename;

    // コンストラクタ
    public function __construct($filename){
        $this->filename = $filename;
    }

    // ログを出力する
    public function write($data):void
    {

        // パス、書き込むデータ、追記
        file_put_contents($this->filename, $data, FILE_APPEND);
    }

    // ログファイルを初期化
    public function clear(): void
    {
        file_put_contents($this->filename, '');
    }
}
