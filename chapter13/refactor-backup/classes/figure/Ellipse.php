<?php

namespace MyApplication\Figure;

require_once dirname(__FILE__) . '/Figure.php';

/**
 * 楕円形を表すクラス
 */
class Ellipse extends Figure
{

    /**
     * デフォルトのカラー
     */
    const DEFAULT_COLOR = '#FFFFFF';

    /**
     * 楕円形のカラーコード。RGBの16進数で表す。たとえば「red」なら「#FF0000」となる。
     */
    private $colorCode;

    /**
     * コンストラクタ
     * @param int $width 楕円形の幅
     * @param int $height 楕円形の高さ
     * @param string $color 楕円形のカラーコード。RGBの16進数で表す。たとえば「red」なら「#FF0000」となる。
     */
    public function __construct(int $width, int $height, string $colorCode)
    {
        $this->width = $width;
        $this->height = $height;
        $this->colorCode = $colorCode;
        $this->draw();
        echo "* 横{$width}、縦{$height}、色{$colorCode}の円形を作りました。<br>";
    }

    /**
     * 楕円形のカラーコードを返す
     * @return string カラーコード。RGBの16進数表記。
     */
    public function getColorCode(): string
    {
        return $this->colorCode;
    }

    /**
     * 楕円形を描画し、$this->dataにバイナリデータを保存する
     */
    protected function draw(): void
    {
        // 何らかの処理
    }
}
