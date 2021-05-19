<?php

declare(strict_types=1);

namespace MyApplication\Map;

use MyApplication\Map\Pin\Pin;
use MyApplication\Map\Image\MapImage;

/**
 * 地図を描画するクラス。使い方は以下の通りです：
 * 1. 使いたい地図画像を表すMapImageインスタンスを作り、本クラスのコンストラクタをコールしてください。
 * 2. ピンを落としたければ、Pinクラスのインスタンスを作り、drawPinメソッドに渡してください。2つ以上のピンを落とすこともできます。
 * 3. 線を引きたければ、線を描画するdrawLineメソッドをコールしてください。2つ以上の線を引くこともできます。
 * 4. 最後に、drawメソッドをコールすることで、地図画像を表示します。
 */
class Map
{
    /**
     * 地図画像を表すMapImageクラスのインスタンス
     */
    protected $mapImage;

    /**
     * ユーザ操作により拡大・縮小可能かを表す真偽値
     */
    protected $expandable;

    /**
     * 拡大レベル。1～10の数値で表す。
     */
    protected $magnificationLevel;

    /**
     * 中心位置の緯度
     */
    protected $longitude;

    /**
     * 中心位置の経度
     */
    protected $latitude;

    /**
     * ドロップされたピン画像の配列
     */
    protected $drawedPins = [];

    /**
     * 描画された線の配列
     */
    protected $drawedLines = [];

    /**
     * 地図画像のファイルパス
     */
    protected $mapImagePath;

    /**
     * コンストラクタ
     * @param bool $expandable ユーザ操作により拡大・縮小可能かを表す真偽値
     * @param int $magnificationLevel 拡大レベル。1～10の数値で表す。
     * @param float $longitude 中心位置の緯度
     * @param float $latitude 中心位置の経度
     */
    public function __construct(MapImage $mapImage, bool $expandable, int $magnificationLevel, float $longitude, float $latitude)
    {
        $this->mapImage = $mapImage;
        $this->expandable = $expandable;
        $this->magnificationLevel = $magnificationLevel;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->drawedPins = [];
    }

    /**
     * 地図上の指定位置にピン画像を描画する。
     * 本メソッドを複数回コールすることで、複数のピンを同時に描画することもできる。
     * @param Pin $pin ピン画像のインスタンス
     * @param float $longitude 描画する緯度
     * @param float $latitude 描画する経度
     */
    public function addPin(Pin $pin, float $longitude, float $latitude): void
    {
        $pinData = [
            'longitude' => $longitude,
            'latitude' => $latitude,
            'pin' => $pin
        ];
        $this->drawedPins[] = $pinData;
    }

    /**
     * 指定した番号のピンを除去する
     * @param int $pinIndex 何番目に描画したピンかを表すインデックス番号。0オリジン。
     */
    public function removePin(int $pinIndex): void
    {
        array_splice($this->drawedPins, $pinIndex, 1);
    }

    /**
     * 地図上に線を描画する。
     * 本メソッドを複数回コールすることで、複数の線を同時に描画することもできる。
     * @param string $color 線の色
     * @param float $longitude1 始点の緯度
     * @param float $latitude1 始点の経度
     * @param float $longitude2 終点の緯度
     * @param float $latitude2 終点の経度
     */
    public function drawLine(string $color, float $longitude1, float $latitude1, float $longitude2, float $latitude2)
    {
        $lineData = [
            'color' => $color,
            'longitude1' => $longitude1,
            'latitude1' => $latitude1,
            'longitude2' => $longitude2,
            'latitude2' => $latitude2
        ];
        $this->drawedLines[] = $lineData;
    }

    /**
     * 完成した地図画像を表示する
     */
    public function draw()
    {
        $message = '';
        $message .= "■地図画像を描画します。地図画像名：{$this->mapImage->getCaption()}、画像パス：{$this->mapImage->getImagePath()}" . PHP_EOL;
        $message .= "■ピンの情報は以下の通りです。" . PHP_EOL;
        foreach ($this->drawedPins as $drawedPin) {
            $message .= "　★ピン：{$drawedPin['pin']}、緯度：{$drawedPin['longitude']}、経度：{$drawedPin['latitude']}" . PHP_EOL;
        }
        $message .= "■線の情報は以下の通りです。" . PHP_EOL;
        foreach ($this->drawedLines as $drawedLine) {
            $message .= "　★色：{$drawedLine['color']}、";
            $message .= "始点：{$drawedLine['longitude1']}/{$drawedLine['latitude1']}、";
            $message .= "終点：{$drawedLine['longitude2']}/{$drawedLine['latitude2']}" . PHP_EOL;
        }
        echo nl2br($message);
    }

    /**
     * ユーザ操作により拡大・縮小可能かを返す
     * @return bool ユーザ操作により拡大・縮小可能かを表す真偽値
     */
    public function isExpandable(): bool
    {
        return $this->expandable;
    }

    /**
     * ユーザ操作により拡大・縮小可能かをセットする
     * @param bool $expandable ユーザ操作により拡大・縮小可能かを表す真偽値
     */
    public function setExpandable(bool $expandable): void
    {
        $this->expandable = $expandable;
    }

    /**
     * 拡大レベルを取得する
     * @return int 拡大レベル
     */
    public function getMagnificationLevel(): int
    {
        return $this->magnificationLevel;
    }

    /**
     * 拡大レベルをセットする
     * @param int $magnificationLevel
     */
    public function setMagnificationLevel(int $magnificationLevel): void
    {
        $this->magnificationLevel = $magnificationLevel;
    }

    /**
     * 中心位置の緯度を取得する
     * @return float 中心位置の緯度
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * 中心位置の緯度をセットする
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * 中心位置の経度を取得する
     * @return float 中心位置の経度
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * 中心位置の経度をセットする
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * 地図画像のファイルパスを取得する
     * @return string 地図画像のファイルパス
     */
    public function getMapImagePath(): string
    {
        return $this->mapImagePath;
    }

    /**
     * 地図画像のファイルパスをセットする
     * @param string $mapImagePath
     */
    protected function setMapImagePath(string $mapImagePath): void
    {
        $this->mapImagePath = $mapImagePath;
    }

}