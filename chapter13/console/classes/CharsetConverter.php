<?php

declare(strict_types=1);

/**
 * 文字コードを変換するクラス
 */
class CharsetConverter
{
    /**
     * ファイルの文字コードをUTF-8からSJIS-winに変換し、別ファイルとして保存する。
     * @param string $fromFile 変換元ファイルパス。存在するファイルを指定すること。
     * @param string $toFile 変換先ファイルパス。既に存在する場合は上書き保存される事に注意。
     */
    public static function utf2sjis(string $fromFile, string $toFile): void
    {
        self::convertEncoding($fromFile, $toFile, 'UTF-8', 'SJIS-win');
    }

    /**
     * ファイルの文字コードをSJIS-winからUTF-8に変換し、別ファイルとして保存する。
     * @param string $fromFile 変換元ファイルパス。存在するファイルを指定すること。
     * @param string $toFile 変換先ファイルパス。既に存在する場合は上書き保存される事に注意。
     */
    public static function sjis2utf(string $fromFile, string $toFile): void
    {
        self::convertEncoding($fromFile, $toFile, 'SJIS-win', 'UTF-8');
    }

    /**
     * ファイルの文字コードを変換し、別ファイルとして保存する。
     * @param string $fromFile 変換元ファイルパス。存在するファイルを指定すること。
     * @param string $toFile 変換先ファイルパス。既に存在する場合は上書き保存される事に注意。
     * @param string $fromEncoding 変換元文字コード
     * @param string $toEncoding 変換先文字コード
     */
    private static function convertEncoding(string $fromFile, string $toFile, string $fromEncoding, string $toEncoding): void
    {
        file_put_contents(
            $toFile,
            mb_convert_encoding(
                file_get_contents($fromFile),
                $toEncoding,
                $fromEncoding
            )
        );
    }

}