<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>暗号化・復号 - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Crypter.php';

    /**
     * cipher.keyに保存されているキーは暗号化と復号のためのパスワードの役目を果たす文字列です。
     * キーが外部に漏れないようにしてください。
     *
     * このプログラムではAES-256-CBCの暗号化アルゴリズムを使いますので、
     * キーの長さは256ビット(=32バイト)である必要があります。
     *
     * cipher.keyに保存されている値は、他の環境に流用しないようにしてください。
     * 他の環境で使うときは、以下のプログラムを実行することで、cipher.keyの内容を書き換えてください。
     *
     *      $bytes = openssl_random_pseudo_bytes(32);
     *      file_put_contents('cipher.key', base64_encode($bytes));
     */

    // cipher.keyの内容をBASE64デコードすると、256ビット(=32バイト)のキーになります。
    $key = base64_decode(file_get_contents('cipher.key'));

    // 暗号化したい文字列
    $address = '東京都渋谷区渋谷99-99-99 テストマンション901号室';

    // 暗号化を行います。encryptメソッドの戻り値の$encryptedと$ivは、両方とも復号に必要です。
    // データベースには、$encryptedと$ivの両方を、カラムを分けて保存してください。
    $crypter = new Crypter($key);
    list($encrypted, $iv) = $crypter->encrypt($address, true);
    echo '●暗号化された文字列：', PHP_EOL;
    echo $encrypted, PHP_EOL;
    echo '●暗号化された文字列のIV：', PHP_EOL;
    echo $iv, PHP_EOL;

    // 復号を行います。
    $crypter = new Crypter($key);
    $decrypted = $crypter->decrypt($encrypted, $iv, true);
    echo '●復号された文字列：', PHP_EOL;
    echo $decrypted, PHP_EOL;
?>
</pre>
</body>
</html>
