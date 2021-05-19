<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/classes/CharsetConverter.php';

setlocale(LC_ALL, 'ja_JP.UTF-8');

/**
 * テーブル定義CSVを元に、CREATE TABLE文およびテーブルごとの接続クラスを自動生成するクラス。
 *
 * 使用手順は以下の通りです：
 *
 *  1. tables/ 以下に、記述ルールに従ったテーブル定義CSVファイルを作成してください。
 *  2. 本プログラムを実行してください。
 *  3. output/ddl/ 以下に、テーブルごとのCREATE TABLE文が生成されます。
 *  4. output/models/ 以下に、テーブルごとのデータベース接続クラスが生成されます。
 *
 * なお、ファイルに出力せずにコンソールにのみ出力したい場合は、本プログラムを--dry-runオプション付きで実行してください。
 */
class TableGenerator
{

    /**
     * 入出力ディレクトリ
     */
    private $dirs;

    /**
     * コマンドラインオプション
     */
    private $options;

    /**
     * コンストラクタ
     */
    public function __construct(array $options)
    {
        $this->options = $options;
        $this->dirs = [
            'table'     => dirname(__FILE__) . '/tables',
            'table-out' => dirname(__FILE__) . '/output/tables-utf',
            'ddl-out'   => dirname(__FILE__) . '/output/ddl',
            'model-out' => dirname(__FILE__) . '/output/models',
        ];
        if (!isset($this->options['dry-run'])) {
            @mkdir($this->dirs['ddl-out'],   0777, true);
            @mkdir($this->dirs['model-out'], 0777, true);
            @mkdir($this->dirs['table-out'], 0777, true);
        }
    }

    /**
     * 本プログラムのメイン処理にあたるメソッド
     */
    public function execute(): void
    {
        foreach (glob($this->dirs['table'] . '/*csv') as $csvFile) {
            $csvFile = basename($csvFile);
            $definition = $this->parseDifinition($csvFile);
            $this->generateDDL($definition);
            $this->generateModel($definition);
        }
    }

    /**
     * tables/ 直下にあるCSVファイルをパースし、結果を連想配列で返す。
     * 戻り値の連想配列は以下のような形式となる。
     *
     * Array
     * (
     *     [table] => Array
     *         (
     *             [physical] => operating_systems
     *             [logical] => OS種別マスタ
     *         )
     * 
     *     [columns] => Array
     *         (
     *             [0] => Array
     *                 (
     *                     [physical] => id
     *                     [logical] => ID
     *                     [type] => SERIAL
     *                     [isPrimaryKey] => 1
     *                     [isNotNull] =>
     *                     [default] =>
     *                     [onUpdate] =>
     *                 )
     * 
     *             [1] => Array
     *                 (
     *                     [physical] => created
     *                     [logical] => 作成日時
     *                     [type] => TIMESTAMP
     *                     [isPrimaryKey] =>
     *                     [isNotNull] => 1
     *                     [default] =>
     *                     [onUpdate] =>
     *                 )
     *         )
     * )
     */
    private function parseDifinition(string $csvFile): array
    {
        CharsetConverter::sjis2utf(
            "{$this->dirs['table']}/{$csvFile}",
            "{$this->dirs['table-out']}/{$csvFile}.utf"
        );
        $csv = new SplFileObject("{$this->dirs['table-out']}/{$csvFile}.utf");
        $csv->setFlags(SplFileObject::READ_CSV);
        $lines = [];
        foreach ($csv as $line) {
            $lines[] = $line;
        }
        $csv = null;
        $definition = [];
        list($none, $definition['table']['physical']) = $lines[0];
        list($none, $definition['table']['logical']) = $lines[1];
        for ($i = 4; $i < count($lines); $i++) {
            if (!$lines[$i][0]) {
                continue;
            }
            $columnDefinition = [
                'physical'      => $lines[$i][0],
                'logical'       => $lines[$i][1],
                'type'          => $lines[$i][2],
                'isPrimaryKey'  => $lines[$i][3] === 'YES',
                'isNotNull'     => $lines[$i][4] === 'YES',
                'default'       => $lines[$i][5],
                'onUpdate'      => $lines[$i][6]
            ];
            $definition['columns'][] = $columnDefinition;
        }
        return $definition;
    }

    /**
     * テーブルごとのDDL(CREATE TABLE)文を出力する。
     */
    private function generateDDL(array $definition): void
    {
        $ddl = <<< DDL
CREATE TABLE {$definition['table']['physical']} (

DDL;

        $columnDDLs = [];
        foreach ($definition['columns'] as $column) {
            $optionString = $this->generateOptionString($column);
            $columnDDLs[] = sprintf('  %-20s %-20s %-20s COMMENT \'%s\'', $column['physical'], $column['type'], $optionString, $column['logical']);
        }
        $ddl .= implode("," . PHP_EOL, $columnDDLs);
        $ddl .= <<< DDL

)
COMMENT = '{$definition['table']['logical']}';

DDL;

        if (isset($this->options['dry-run'])) {
            echo $ddl, PHP_EOL;
            return;
        }

        file_put_contents(
            "{$this->dirs['ddl-out']}/{$definition['table']['physical']}.txt",
            $ddl
        );
    }

    /**
     * テーブル操作を行うためのPHPプログラムを出力する。
     */
    private function generateModel(array $definition): void
    {
        $className = $this->convert2CamelCase($definition['table']['physical']);
        $src = <<< SRC
<?php
require_once 'dir1/dir2/dir3/AbstractModel.php';

class {$className}Model extends AbstractModel
{

SRC;

        foreach ($definition['columns'] as $column) {
            $propertyLowerCamel = lcfirst($this->convert2CamelCase($column['physical']));
            $src .= <<< SRC
    /**
     * {$column['logical']}
     */
    private \${$propertyLowerCamel};


SRC;
        }

        foreach ($definition['columns'] as $column) {
            $propertyLowerCamel = lcfirst($this->convert2CamelCase($column['physical']));
            $property = $this->convert2CamelCase($column['physical']);
            $src .= <<< SRC
    /**
     * {$column['logical']}を取得する
     */
    public function get{$property}()
    {
        return \$this->{$propertyLowerCamel};
    }

    /**
     * {$column['logical']}をセットする
     */
    public function set{$property}(\${$propertyLowerCamel})
    {
        \$this->{$propertyLowerCamel} = \${$propertyLowerCamel};
    }


SRC;
        }
        $src .= <<< SRC
}

SRC;

        if (isset($this->options['dry-run'])) {
            echo $src, PHP_EOL;
            return;
        }

        file_put_contents(
            "{$this->dirs['model-out']}/" . $this->convert2CamelCase($definition['table']['physical']) . ".php",
            $src
        );
    }

    /**
     * カラム定義に応じた、CREATE TABLE文のオプション文字列を生成して返す。
     */
    private function generateOptionString(array $column): string
    {
        $options = [];
        if ($column['isPrimaryKey']) {
            $options[] = 'PRIMARY KEY';
        }
        if ($column['isNotNull']) {
            $options[] = 'NOT NULL';
        }
        if ($column['default']) {
            $options[] = 'DEFAULT ' . $column['default'];
        }
        if ($column['onUpdate']) {
            $options[] = 'ON UPDATE ' . $column['onUpdate'];
        }
        return implode(' ', $options);
    }

    /**
     * スネークケースをアッパーキャメルケースに変換する。
     * @param string $value operating_systemのようなスネークケース文字列
     * @return string OperatingSystemのようなアッパーキャメルケース文字列
     */
    private function convert2CamelCase(string $value): string
    {
        return str_replace('_', '', ucwords($value, '_'));
    }

}

// メインルーチン
$options = getopt('', ['dry-run']);
$generator = new TableGenerator($options);
$generator->execute();
