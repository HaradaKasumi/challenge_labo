<?php

namespace MyApplication\Figure;

/**
 * 図形を表す抽象クラス
 */
abstract class Figure
{
    /**
     * 図形の幅
     */
    protected $width;

    /**
     * 図形の高さ
     */
    protected $height;

    /**
     * 図形のバイナリデータ
     */
    protected $data;

    /**
     * 図形の幅を返す
     * @return int 図形の幅
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * 図形の高さを返す
     * @return int 図形の高さ
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * 図形のバイナリデータを返す
     * @return resource 図形のバイナリデータ
     */
    public function getData(): resource
    {
        return $this->data;
    }

    /**
     * 図形の角を丸くする
     * @param int $radius 角丸の半径
     */
    public function round(int $radius)
    {
        return $this->data;
    }

    /**
     * 図形を描画し、$this->dataにバイナリデータを保存する抽象メソッド
     */
    abstract protected function draw(): void;

}
