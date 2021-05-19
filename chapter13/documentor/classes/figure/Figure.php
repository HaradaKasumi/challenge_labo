<?php

namespace MyApplication\Figure;

/**
 * 図形を表すインターフェース
 */
interface Figure
{
    /**
     * 図形の幅を返す
     * @return int 図形の幅
     */
    public function getWidth(): int;

    /**
     * 図形の高さを返す
     * @return int 図形の高さ
     */
    public function getHeight(): int;

    /**
     * 図形のバイナリデータを返す
     * @return resource 図形のバイナリデータ
     */
    public function getData(): resource;
}
