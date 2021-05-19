<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/../../../vendor/autoload.php';

use Monolog\Logger;
use MySQLHandler\MySQLHandler;

/**
 * 商品テーブルに対するデータベース操作を行うクラス
 */
class ItemModel
{
    /**
     * 商品をフリーワードで検索する。
     * @param $mode 1：部分一致、2：前方一致
     */
    public function findByFreeword(string $freeword, int $mode): array
    {
        global $logger;
        if ($mode !== 1 && $mode !== 2) {
            $mode = 1;
            $logger->warning('引数$modeの値が不明です。1(部分一致)とみなして処理を続行します。', getExtraLogs());
        }

        // データベースから商品を検索します。
        // ここでは固定の商品データを返します。

        $logger->info("SELECT * FROM items WHERE item_name LIKE '%{$freeword}%';", getExtraLogs());
        $items = [
            [
                'id' => 10001,
                'name' => 'タッチペン極細',
                'price' =>  1200
            ],
            [
                'id' => 10002,
                'name' => 'タッチペン ペン先3個付き',
                'price' =>  1300
            ]
        ];
        return $items;
    }

    /**
     * 商品を商品コードで検索する
     */
    public function findByCode(string $code)
    {
        // 本メソッドは必ず例外を投げます。
        throw new Exception('SQLの実行エラーが発生しました。');
    }
}

/**
 * ログに記録する付加情報を取得する関数。
 */
function getExtraLogs(): array
{
    $backtrace = debug_backtrace();
    return [
        'ip'            => $_SERVER['REMOTE_ADDR'],
        'user_agent'    => $_SERVER['HTTP_USER_AGENT'],
        'created'       => date('Y-m-d H:i:s'),
        'line'          => isset($backtrace[0]['line']) ? $backtrace[0]['line'] : '',
        'function'      => isset($backtrace[1]['function']) ? $backtrace[1]['function'] : '',
        'class'         => isset($backtrace[1]['class']) ? $backtrace[1]['class'] : ''
    ];
}

// メインルーチン
$pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// ロガー名「MyApplication」を初期化します。
$logger = new Logger('MyApplication');

// ログテーブル名と、付加情報を保存するカラム名を指定して、MySQLHandlerをインスタンス化する。
// ※honkaku_logsテーブルは、あらかじめ作成しておく必要はありません。
$additionalFields = [
    'created'   ,           // ログの記録日時
    'ip'        ,           // アクセス元IPアドレス
    'user_agent',           // アクセス元User-Agent(ブラウザ種別)
    'line'      ,           // ログを記録した行番号
    'function'  ,           // ログを記録したメソッド名
    'class'                 // ログを記録したクラス名
];
$logger->pushHandler(
    new MySQLHandler($pdo, "honkaku_logs", $additionalFields, Logger::DEBUG)
);

// ユーザが「タッチペン」というワードで検索したと仮定します。
$itemModel = new ItemModel();
$freeword = 'タッチペン';
$logger->info("フリーワード「{$freeword}」で検索されました。", getExtraLogs());
try {
    $items = $itemModel->findByFreeword($freeword, -1);
} catch (Exception $e) {
    $logger->error('フリーワード検索で例外が発生しました。' . print_r($e, true), getExtraLogs());
}

// ユーザが「ITEM-00141」という商品コードで検索したと仮定します。
$itemCode = 'ITEM-00141';
$logger->info("商品コード「{$itemCode}」で検索されました。", getExtraLogs());
try {
    $items = $itemModel->findByCode($itemCode);
} catch (Exception $e) {
    $logger->error('商品コード検索で例外が発生しました。' . print_r($e, true), getExtraLogs());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>monologによるロギング例 - honkaku</title>
</head>
<body>
    <p>商品を検索しました。</p>
</body>
</html>
