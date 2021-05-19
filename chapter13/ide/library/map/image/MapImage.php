<?php

declare(strict_types=1);

namespace MyApplication\Map\Image;

/**
 * 地図画像を表す抽象クラス
 */
abstract class MapImage
{
    /**
     * 地図画像のファイルパス
     */
    protected $imagePath;

    /**
     * キャプション文字
     */
    protected $caption;

    /**
     * 地図画像のファイルパスを取得する
     * @return string 地図画像のファイルパス
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * 地図画像のファイルパスをセットする
     * @param string $image
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    /**
     * キャプション文字を取得する
     * @return string キャプション文字
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * キャプション文字をセットする
     * @param string $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }


}