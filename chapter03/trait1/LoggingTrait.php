<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Logger.php';

// ログ出力の初期化処理をするためのトレイト
trait LoggingTrait
{
    // Loggerインスタンス
    private $logger;

    // ログファイル
    private $logFileName;

    // Loggerインスタンスをロードする
    private function loadLogger(): void
    {

        if ($this->logFileName === null)
        {
            $this->logFileName = __CLASS__ . '.log';
        }
        $this->logger = new Logger($this->logFileName);
        $this->logger->clear();
    }

    // ログを出力するメソッド
    private function log(string $data)
    {
        if($this->logger === null)
        {
            $this->loadLogger();
        }
        $data = date('Y-m-d H:i:s') . '' . $data;
        $this->logger->write($data);
    }
}
