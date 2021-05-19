<?php

declare(strict_types=1);

namespace MyApplication\Map\Pin;

require_once dirname(__FILE__) . '/Pin.php';

/**
 * 地図上に描画するための定型的なピン画像を表すクラス
 */
class GenericPin extends Pin
{
    /**
     * デフォルトのピン色
     */
    const DEFAULT_COLOR = 'red';

    /**
     * デフォルトのサイズ
     */
    const DEFAULT_SIZE = 20;

    /**
     * ピンの色
     */
    private $color;

    /**
     * コンストラクタ
     * @param int $size ピンのサイズ
     * @param string $color ピンの色
     */
    public function __construct(?int $size, ?string $color)
    {
        if (!$size) {
            $size = self::DEFAULT_SIZE;
        }
        $this->size = $size;

        if (!$color) {
            $color = self::DEFAULT_COLOR;
        }
        $this->color = $color;
    }

    /**
     * ピンの色を取得する
     * @return string ピンの色
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * ピンの色を取得する
     * @param string ピンの色
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * インスタンスの文字列表現を返す
     */
    public function __toString()
    {
        return "サイズ：{$this->size}、色：{$this->color}、吹き出しメッセージ：{$this->message}";
    }

}