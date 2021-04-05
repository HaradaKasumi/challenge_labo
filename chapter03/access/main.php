<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>アクセス修飾子の実験</title>
</head>
<body>
<pre>
<?php
    class SomeClass
    {
        public $propertyA;
        private $propertyB;

        public function methodA() : void
        {
            echo 'methodA called.', PHP_EOL;
            $this->methodB(); // 自クラス内からであればアクセス可能
        }

        private function methodB() : void
        {
            echo 'methodB called.', PHP_EOL;
        }
    }
    $someInstance = new SomeClass();

    $someInstance->propertyA = 'A'; // publicなのでアクセス可能
    $someInstance->methodA(); // publicなのでアクセス可能

    // $someInstance->propertyB = 'B'; // privateなのでエラーとなる
    // $someInstance->methodB(); // privateなのでエラーとなる
?>
</pre>
</body>
</html>
