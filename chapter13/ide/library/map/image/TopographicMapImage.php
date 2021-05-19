<?php

declare(strict_types=1);

namespace MyApplication\Map\Image;

require_once dirname(__FILE__) . '/MapImage.php';

/**
 * 地形地図を表すクラス
 */
class TopographicMapImage extends MapImage
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->imagePath = 'topographic-map.png';
        $this->caption = '地形地図';
    }

}