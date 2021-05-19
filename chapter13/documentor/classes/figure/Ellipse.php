<?php

namespace MyApplication\Figure;

require_once dirname(__FILE__) . '/Figure.php';

/**
 * 楕円形を表すクラス
 */
class Ellipse implements Figure
{

    /**
     * デフォルトのカラー
     */
    const DEFAULT_COLOR = '#FFFFFF';

    /**
     * 楕円形の幅
     */
    private $width;

    /**
     * 楕円形の高さ
     */
    private $height;

    /**
     * 楕円形の色
     */
    private $color;

    /**
     * コンストラクタ
     * @param int $width 楕円形の幅
     * @param int $height 楕円形の高さ
     * @param string $color 楕円形の色。RGBの16進数で表す。
     */
    public function __construct(int $width, int $height, string $color)
    {
        // 何らかの処理
    }

    /**
     * 楕円形の幅を返す
     * @return int 楕円形の幅
     */
    public function getWidth(): int
    {
        // 何らかの処理
    }

    /**
     * 楕円形の高さを返す
     * @return int 楕円形の高さ
     */
    public function getHeight(): int
    {
        // 何らかの処理
    }

    /**
     * 楕円形のバイナリデータを返す
     * @return resource 楕円形のバイナリデータ
     */
    public function getData(): resource
    {
        // 何らかの処理
    }
}
