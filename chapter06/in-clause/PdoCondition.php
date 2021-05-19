<?php

declare(strict_types=1);

/**
 * PDOによるSQL実行時の、可変の条件を表すクラス。
 * プレースホルダ名とプレースホルダ値をプロパティとして持つ。
 */
class PdoCondition
{
    /**
     * プレースホルダ名
     */
    private $name;

    /**
     * プレースホルダ値
     */
    private $value;

    /**
     * プレースホルダの型
     */
    private $type;

    /**
     * コンストラクタ
     */
    public function __construct(string $name, $value, $type = PDO::PARAM_STR)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * プレースホルダ名を取得する
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * プレースホルダ値を取得する
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * プレースホルダの型を取得する
     */
    public function getType(): int
    {
        return $this->type;
    }

}
