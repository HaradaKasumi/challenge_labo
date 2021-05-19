<?php

declare(strict_types=1);

/**
 * 暗号化・復号を行うクラス
 */
class Crypter
{
    /**
     * デフォルトで使う暗号化アルゴリズム
     */
    private const DEFUALT_METHOD = 'AES-256-CBC';

    /**
     * 暗号化・復号のためのキー
     */
    private $key;

    /**
     * 暗号化アルゴリズム
     */
    private $method;

    /**
     * コンストラクタ
     */
    public function __construct(string $key, string $method = null)
    {
        $this->key = $key;
        if (is_null($method)) {
            $this->method = self::DEFUALT_METHOD;
        } else {
            $this->method = $method;
        }
    }

    /**
     * 文字列を暗号化する
     * @param string $value 暗号化したい文字列
     * @param bool $isBase64 戻り値をbase64エンコードして返す場合はtrueを指定
     * @return array 0番目の要素として暗号化済の文字列、1番目の要素としてIVを持つ配列
     */
    public function encrypt(string $value, bool $isBase64 = true): array
    {
        $ivLength = openssl_cipher_iv_length($this->method);
        $iv = openssl_random_pseudo_bytes($ivLength);
        $encrypted = openssl_encrypt($value, $this->method, $this->key, OPENSSL_RAW_DATA, $iv);
        if ($isBase64) {
            return [base64_encode($encrypted), base64_encode($iv)];
        } else {
            return [$encrypted, $iv];
        }
    }

    /**
     * 文字列を復号する。
     * @param string $value 暗号化済の文字列
     * @param string $iv IV文字列
     * @param bool $isBase64 引数$value、$ivがbase64エンコードされている場合はtrueを指定
     * @return 復号された文字列
     */
    public function decrypt(string $value, string $iv, bool $isBase64 = true): string
    {
        if ($isBase64) {
            $iv = base64_decode($iv);
            $value = base64_decode($value);
        }
        $decrypted = openssl_decrypt($value, $this->method, $this->key, OPENSSL_RAW_DATA, $iv);
        return $decrypted;
    }
}
