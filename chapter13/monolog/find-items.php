<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\BrowserConsoleHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Processor\UidProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Processor\IntrospectionProcessor;
use Monolog\Formatter\LineFormatter;

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
            $logger->warning('引数$modeの値が不明です。1(部分一致)とみなして処理を続行します。');
        }

        // データベースから商品を検索します。
        // ここでは固定の商品データを返します。

        $logger->info("SELECT * FROM items WHERE item_name LIKE '%{$freeword}%';");
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

// メインルーチン

// ロガー名「MyApplication」を初期化します。
$logger = new Logger('MyApplication');

// MemoryUsageProcessorを追加することで、メモリ使用量を付加情報として記録します。
// これはMyApplicationロガー全体に適用されます。
$logger->pushProcessor(new MemoryUsageProcessor());

// 日別のログを記録するためにRotatingFileHandlerを追加します。
// ファイル名はserver-YYYY-MM-DD.logの形式となり、14日より前のファイルは自動で消去されます。
$logger->pushHandler(
    (new RotatingFileHandler('logs/server.log', 14, Logger::DEBUG))

    // IntrospectionProcessorを追加することで、ログ出力が行われた行番号も記録されます。
    ->pushProcessor(new IntrospectionProcessor())

    // UidProcessorを追加することで、PHPプログラムを実行するたびに生成される、ユニークなID値も記録されます。
    ->pushProcessor(new UidProcessor())
);

// exception.logにエラー情報を記録するためにStreamHandlerを追加します。
$logger->pushHandler(
    (new StreamHandler(dirname(__FILE__) . '/logs/exceptions.log', Logger::ERROR))

    // LineFormatterのコンストラクタ第3引数をtrueにすることで、このハンドラでのみ、改行コードも解釈されます。
    ->setFormatter(new LineFormatter(null, null, true))

    // IntrospectionProcessorを追加することで、ログ出力が行われた行番号も記録されます。
    ->pushProcessor(new IntrospectionProcessor())
);

// Webブラウザのコンソールに出力するためにBrowserConsoleHandlerを追加します。
$logger->pushHandler(
    new BrowserConsoleHandler(Logger::DEBUG)
);

// ユーザが「タッチペン」というワードで検索したと仮定します。
$itemModel = new ItemModel();
$freeword = 'タッチペン';
$logger->info('フリーワード検索されました。', ['freeword' => $freeword]);
try {
    $items = $itemModel->findByFreeword($freeword, -1);
} catch (Exception $e) {
    $logger->error('フリーワード検索で例外が発生しました。', ['message' => $e->getMessage(), 'exception' => print_r($e, true)]);
}

// ユーザが「ITEM-00141」という商品コードで検索したと仮定します。
$itemCode = 'ITEM-00141';
$logger->info('商品コード検索されました。', ['itemCode' => $itemCode]);
try {
    $items = $itemModel->findByCode($itemCode);
} catch (Exception $e) {
    $logger->error('商品コード検索で例外が発生しました。', ['message' => $e->getMessage(), 'exception' => print_r($e, true)]);
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
