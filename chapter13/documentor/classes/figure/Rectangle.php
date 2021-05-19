<?php

namespace MyApplication\Figure;

/**
 * 四角形を表すクラス
 */
class Rectangle implements Figure
{

    /**
     * 四角形の幅
     */
    private $width;

    /**
     * 四角形の高さ
     */
    private $height;

    /**
     * コンストラクタ
     * @param int $width 四角形の幅
     * @param int $height 四角形の高さ
     */
    public function __construct(int $width, int $height)
    {
        // 何らかの処理
    }

    /**
     * 四角形の幅を返す
     * @return int 四角形の幅
     */
    public function getWidth(): int
    {
        // 何らかの処理
    }

    /**
     * 四角形の高さを返す
     * @return int 四角形の高さ
     */
    public function getHeight(): int
    {
        // 何らかの処理
    }

    /**
     * 四角形のバイナリデータを返す
     * @return resource 四角形のバイナリデータ
     */
    public function getData(): resource
    {
        // 何らかの処理
    }
}
