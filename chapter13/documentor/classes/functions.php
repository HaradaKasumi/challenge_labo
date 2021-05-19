<?php

/**
 * プロフィール画像を保存するディレクトリ
 */
define('PROFILE_IMAGE_DIR', dirname(__FILE__) . '/profiles');

/**
 * 画像ファイルを％指定でリサイズし、別のファイルに書き出す
 * @param string $fromPath 読み込み元の画像ファイルの絶対パス
 * @param string $toPath 書き込み先の画像ファイルの絶対パス
 * @param float $percentage リサイズするパーセンテージ。たとえば、82.5％のサイズにリサイズしたい時は0.825と指定する。
 * @return bool リサイズ成功時はtrue。失敗時はfalse
 */
function resizeImage(string $fromPath, string $toPath, float $percentage): bool
{
    // 何らかの処理
}

/**
 * 原寸大の画像ファイルをプロフィール用にリサイズ及びクロップする
 * @param string $fromPath 読み込み元の画像ファイルの絶対パス
 * @param string $toPath 書き込み先の画像ファイルの絶対パス
 */
function generateProfileImage(string $fromPath, string $toPath): bool
{
    // 何らかの処理
}
