<?php

namespace MyApplication;

/**
 * さまざまな図形を描画するキャンバスを表すクラス。以下は使い方の例です。
 *
 * $canvas = new MyApplication\Canvas(800, 500); // まっさらなキャンバスを初期化
 *
 * $ellipse = new MyApplication\Figure\Ellipse(100, 200, '#FF0000'); // 楕円形データを作る
 *
 * $canvas->putFigure($ellipse, 20, 30); // 楕円形データを(20, 30)の位置に配置する
 *
 * $image = new MyApplication\Image('images/dummy.png'); // 画像データを作る
 *
 * $canvas->putImage($image, 100, 300); // 画像データを(100, 300)の位置に配置する
 */
class Canvas
{

    /**
     * 最新の状態のバイナリデータ
     */
    private $data;

    /**
     * コンストラクタ
     * @param int $width キャンバスの幅
     * @param int $height キャンバスの高さ
     */
    public function __construct(int $width, int $height)
    {
        // 何らかの処理
    }

    /**
     * 図形をキャンバスに配置する
     * @param Figure $figure 図形クラスのインスタンス
     * @param int $positionX 配置する地点のX座標
     * @param int $positionY 配置する地点のY座標
     */
    public function putFigure(Figure\Figure $figure, int $positionX, int $positionY): void
    {
        // 何らかの処理
    }

    /**
     * 図形をキャンバスに配置する
     * @param Image $image 画像クラスのインスタンス
     * @param int $positionX 配置する地点のX座標
     * @param int $positionY 配置する地点のY座標
     */
    public function putImage(Image $image, int $positionX, int $positionY): void
    {
        // 何らかの処理
    }

    /**
     * キャンバスをファイルに保存する
     * @param string $toFileName 保存先ファイルパス
     */
    public function save(string $toFileName): void
    {
        // 何らかの処理
    }

}
