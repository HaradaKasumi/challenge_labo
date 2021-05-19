<?php

declare(strict_types=1); 

require_once dirname(__FILE__) . '/LoggingTrait.php';

// 会員クラス
class MemberModel
{
    // use文を使い、トレイトのプロパティ・メソッドを自身に挿し込む
    use LoggingTrait;

    // コンストラクタ
    public function __construct()
    {
        // 独自のログファイル名を指定したい場合は、以下のコメントアウトを外します。
        // $this->logFileName = 'my-log.log';
    }

    // 会員データを新規作成する
    public function create(string $memberId): void
    {
        $this->log("created {$memberId}." . PHP_EOL);
    }

    // 会員データを削除する
    public function delete(string $memberId): void
    {
        $this->log("deleted {$memberId}." . PHP_EOL);
    }
}
