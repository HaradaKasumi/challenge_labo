<?php

declare(strict_types=1);

namespace MyApplication\Map\Image;

require_once dirname(__FILE__) . '/MapImage.php';

/**
 * 衛星画像を表すクラス
 */
class SatelliteMapImage extends MapImage
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->imagePath = 'satellite-map.png';
        $this->caption = '衛星画像';
    }

}