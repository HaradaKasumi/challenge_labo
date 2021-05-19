<?php

namespace MyApplication;

/**
 * 画像ファイルを加工するクラス。
 *
 * 本クラスは、内部的にPHPの画像処理(GD)関数を使っています。
 * また、Canvasクラスの説明書きもご覧ください。
 *
 * @see http://example.com/gd-document.html
 * @see \MyApplication\Canvas
 */
class Image
{
    /**
     * 画像ファイル名
     */
    private $fileName;

    /**
     * 最新の状態の画像バイナリデータ
     */
    private $data;

    /**
     * コンストラクタ
     * @param string $fileName 加工対象の画像ファイルパス
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        echo "* ファイル名：{$fileName}の画像を読み込みました。<br>";
    }

    /**
     * 画像ファイルのバイナリデータを$dataプロパティにセットする。
     */
    private function parseImage()
    {
        // 何らかの処理
    }

    /**
     * 画像ファイルのバイナリデータを取得する
     */
    public function getData(): resource
    {
        // 何らかの処理
    }

    /**
     * 画像をリサイズする。
     * 本メソッドはdeprecatedであるため、今後はresizeByPercentageを使ってください。
     * @deprecated
     * @param integer リサイズ後の長辺の長さ
     */
    public function resize(int $size): void
    {
        // 何らかの処理
    }

    /**
     * 画像を％指定でリサイズする。
     * @param integer リサイズ後の長辺の長さ
     */
    public function resizeByPercentage(float $percentage): void
    {
        // 何らかの処理
    }

    /**
     * 画像の中央部を、引数で指定された縦横サイズで切り抜く(クロップする)。
     * @param int $width クロップしたい縦サイズ
     * @param int $height クロップしたい横サイズ
     */
    public function crop(int $width, int $height): void
    {
        // 何らかの処理
    }

    /**
     * 画像の中央部に透かし文字を入れる
     * @param string $value 透かし文字
     */
    public function watermark(string $value): void
    {
        // 何らかの処理
    }

    /**
     * 最新の状態の画像データをファイルとして保存する
     * @param string $value 保存先ファイルパス。省略した場合はコンストラクタで指定したファイルパスを上書きする。
     * @return bool ファイル書き込みに成功したらtrue、失敗したらfalseを返す
     */
    public function save(string $toFileName = null): bool
    {
        // 何らかの処理
    }
}
