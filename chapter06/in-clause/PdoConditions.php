<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/PdoCondition.php';

/**
 * 複数のPdoConditionのリストを表すクラス
 */
class PdoConditions
{
    /**
     * PdoConditionインスタンスの配列
     */
    private $conditions;

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->conditions = [];
    }

    /**
     * PdoConditionインスタンスを追加する
     */
    public function add(PdoCondition $condition): void
    {
        $this->conditions[$condition->getName()] = $condition;
    }

    /**
     * 指定したプレースホルダ名を持つPdoConditionインスタンスを持つかを返す
     */
    public function hasName(string $name): bool
    {
        return isset($this->conditions[$name]);
    }

    /**
     * PdoConditionのリストを取得する
     */
    public function getAll(): array
    {
        return $this->conditions;
    }
}
