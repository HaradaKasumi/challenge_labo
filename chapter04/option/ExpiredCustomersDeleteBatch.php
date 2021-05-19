<?php

declare(strict_types=1);

/**
 * 契約期限から1年以上経過した顧客をデータベースから削除するバッチ処理。
 * 本バッチ処理には、以下のコマンドライン引数を指定することができる。
 *
 * ●-v または --verbose 
 *   この引数指定時、開発者向けのデバッグ情報を出力しながら実行します。
 * 
 * ●-d または --dry-run
 *   空回り(Dry Run)させるための引数。
 *   この引数指定時、データベース削除処理を実行せず、削除対象の顧客IDを出力するのみにとどめます。
 *
 * ●-c または --customer-id
 *   一部の顧客IDのみを対象に処理するための引数。この引数が無い場合は全顧客を対象に処理します。
 *   以下が使用例です。
 *
 *   --customer-id=1234                 -> 顧客IDが1234のみを対象に処理します
 *   --customer-id=1234,2345,3456       -> 3つの顧客IDを対象に処理します
 *   --customer-id=1001-1500            -> 顧客IDが1001～1500の500顧客のみを対象に処理します
 */
class ExpiredCustomersDeleteBatch
{

    /**
     * コマンドライン引数を格納した連想配列
     */
    private $options;

    /**
     * 詳細出力オプションの有無
     */
    private $isVerbose;

    /**
     * 空回り(Dry-Run)オプションの有無
     */
    private $isDryRun;

    /**
     * 対象顧客IDの配列
     */
    private $customerIds;

    /**
     * コンストラクタ
     */
    public function __construct($options)
    {
        $this->options = $options;
        $this->parseOptions();
    }

    /**
     * バッチ処理を実行する。
     */
    public function exec()
    {
        echo '■顧客削除バッチ処理を実行します。', PHP_EOL;
        echo '●詳細情報の出力：', $this->isVerbose ? 'true' : 'false', PHP_EOL;
        echo '●空回り(Dry-Run)：', $this->isDryRun ? 'true' : 'false', PHP_EOL;
        echo '●対象顧客ID：', print_r($this->customerIds, true), PHP_EOL;

        // ここに、顧客削除処理が入ります。
    }

    /**
     * コマンドライン引数に$keysで指定されたいずれかの引数が指定されているかを調べる。
     * @param array $keys 調べたいコマンドライン引数名。配列で複数指定可。
     * @return 指定した引数が存在すればtrue。しなければfalse。
     */
    private function isOptionExists(array $keys): bool
    {
        foreach ($keys as $key) {
            if (array_key_exists($key, $this->options)) {
                return true;
            }
        }
        return false;
    }

    /**
     * コマンドライン引数の-cまたは--customer-idを解析する。
     */
    private function parseCustomerIds(): ?array
    {
        $customerIds = '';
        if (array_key_exists('c', $this->options)) {
            $customerIds = $this->options['c'];
        } elseif (array_key_exists('customer-id', $this->options)) {
            $customerIds = $this->options['customer-id'];
        }
        if (!trim($customerIds)) {
            return null;
        }
        if (preg_match('/,/u', $customerIds)) {
            return explode(',', $customerIds);
        }
        if (preg_match('/\-/u', $customerIds)) {
            list($start, $end) = explode('-', $customerIds);
            return range($start, $end);
        }
        return [$customerIds];
    }

    /**
     * コマンドライン引数を解析する。
     */
    private function parseOptions(): void
    {
        $this->isVerbose = $this->isOptionExists(['v', 'verbose']);
        $this->isDryRun = $this->isOptionExists(['d', 'dry-run']);
        $this->customerIds = $this->parseCustomerIds();
    }
}


// メインルーチン
$options = getopt('vc:d', ['verbose', 'customer-id:', 'dry-run']);
$batch = new ExpiredCustomersDeleteBatch($options);
$batch->exec();
