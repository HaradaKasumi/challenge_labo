<?php

declare(strict_types=1);

namespace MyApplication\Map\Pin;

/**
 * 地図上に描画するためのピン画像を表す抽象クラス
 */
abstract class Pin
{
    /**
     * ピンのサイズ。ピクセル数で表す。
     */
    protected $size;

    /**
     * 吹き出しメッセージ
     */
    protected $message;

    /**
     * ピンのサイズを取得する
     * @return int ピンのサイズ
     */
    public function getSize(): int
    {
        return $this->size();
    }

    /**
     * ピンのサイズをセットする
     * @param int $size ピンのサイズ。ピクセル単位で指定する。
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * ピンの吹き出しメッセージを取得する
     * @return string 吹き出し中のメッセージ
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * ピンに吹き出しメッセージをセットする
     * @param string $message 吹き出し中に表示したいメッセージ
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}