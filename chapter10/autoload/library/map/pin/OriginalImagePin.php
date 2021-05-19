<?php

declare(strict_types=1);

namespace MyApplication\Map\Pin;

require_once dirname(__FILE__) . '/Pin.php';

/**
 * 地図上に描画するための、ユーザ指定のオリジナル画像ファイルを使ったピンを表すクラス。
 */
class OriginalImagePin extends Pin
{
    /**
     * 画像ファイルのパス
     */
    private $imagePath;

    /**
     * コンストラクタ
     * @param string $imagePath 画像ファイルのパス
     * @param int $size 画像ファイルの描画サイズ
     */
    public function __construct(string $imagePath, int $size)
    {
        $this->size = $size;
        $this->imagePath = $imagePath;
    }

    /**
     * ピンの画像ファイルパスを取得する
     * @return string ピンの画像ファイルパス
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * ピンの画像ファイルパスをセットする
     * @param string $imagePath ピンの画像ファイルパス
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    /**
     * インスタンスの文字列表現を返す
     */
    public function __toString()
    {
        return "画像ファイルパス：{$this->imagePath}、吹き出しメッセージ：{$this->message}";
    }
}