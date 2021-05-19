<?php

declare(strict_types=1);

namespace MyApplication\Map\Image;

require_once dirname(__FILE__) . '/MapImage.php';

/**
 * 定型的な地図画像を表すクラス
 */
class GenericMapImage extends MapImage
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->imagePath = 'generic-map.png';
        $this->caption = '定形的な地図画像';
    }

}