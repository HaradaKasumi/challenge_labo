<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>静的メソッド・プロパティ - honkaku</title>
</head>
<body>
<?php
    // 何らかのクラス
    class SomeClass
    {
        // インスタンスプロパティ
        private $instanceProperty;

        // 静的メソッド
        public static function staticMethod()
        {
            // インスタンスプロパティにアクセスする。
            // エラー「Using $this when not in object context」となる。
            $this->instanceProperty = 1;
        }
    }

    // メインルーチン
    SomeClass::staticMethod();
?>
</body>
</html>
