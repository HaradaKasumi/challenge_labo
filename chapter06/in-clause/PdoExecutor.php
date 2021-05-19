<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/PdoConditions.php';
require_once dirname(__FILE__) . '/PdoCondition.php';

/**
 * PDOを使ってSQL文を実行するクラス
 */
class PdoExecutor
{

    /**
     * PDOインスタンス
     */
    private $pdo;

    /**
     * 簡易的なデバッグのための、プレースホルダ置換後のSQL文
     */
    private $debugSql;

    /**
     * コンストラクタ
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * SQLを実行する。
     */
    public function execute(string $sql, PdoConditions $conditions, bool $isSkipExecute = false): PDOStatement
    {
        $this->debugSql = $sql = $this->replaceSql($sql, $conditions);
        $statement = $this->pdo->prepare($sql);
        $placeHolders = [];
        foreach ($conditions->getAll() as $condition) {
            $conditionValue = $condition->getValue();
            if (is_array($conditionValue)) {
                for ($i = 0; $i < count($conditionValue); $i++) {
                    $placeHolderName = $this->generateSequentialPlaceHolder($condition->getName(), $i);
                    $placeHolders[$placeHolderName] = [$conditionValue[$i], $condition->getType()];
                }
            } else {
                $placeHolders[$condition->getName()] = [$condition->getValue(), $condition->getType()];
            }
        }
        foreach ($placeHolders as $name => $values) {
            list($value, $type) = $values;
            if ($this->hasPlaceHolder($sql, $name)) {
                $statement->bindValue($name, $value, $type);
                if ($type === PDO::PARAM_STR) {
                    $this->debugSql = str_replace($name, "'" . $value . "'", $this->debugSql);
                } else {
                    $this->debugSql = str_replace($name, $value, $this->debugSql);
                }
            }
        }
        if ($isSkipExecute) {
            return $statement;
        }
        $statement->execute();
        return $statement;
    }

    /**
     * 簡易的なデバッグのための、プレースホルダ置換後のSQL文を取得する
     */
    public function getDebugSql()
    {
        return $this->debugSql;
    }

    /**
     * IN句を加味してプレースホルダを変換したSQL文字列を返す。
     *
     * 置換前のSQL例：
     *      select * from table where name = :name or id in (:ids);
     *
     * 置換後のSQL例：
     *      select * from table where name = :name or id in (:ids_0001, :ids_0002, :ids_0003);
     *
     * 引数$conditionsのgetValue()のデータ型が、配列であった場合のみ置換を行う。
     */
    protected function replaceSql(string $sql, PdoConditions $conditions): string
    {
        foreach ($conditions->getAll() as $condition) {
            $conditionValue = $condition->getValue();
            if (is_array($conditionValue)) {
                $placeHolders = [];
                for ($i = 0; $i < count($conditionValue); $i++) {
                    $placeHolders[] = $this->generateSequentialPlaceHolder($condition->getName(), $i);
                }
                $sql = str_replace($condition->getName(), implode(',', $placeHolders), $sql);
            }
        }
        return $sql;
    }

    /**
     * 連番のプレースホルダ名を組み立てる。たとえば、引数$placeHolderNameが「:publishers」で、
     * $numberが「5」だった時、本メソッドは「:publishers_0005」の文字列を返す。
     */
    private function generateSequentialPlaceHolder(string $placeHolderName, int $number): string
    {
        return $placeHolderName . '_' . str_pad(strval($number), 4, '0', STR_PAD_LEFT);
    }

    /**
     * SQL中にプレースホルダ名が含まれているかを調べる
     */
    private function hasPlaceHolder($sql, $placeHolderName): bool
    {
        return strpos($sql, $placeHolderName) !== false;
    }

}