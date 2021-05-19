<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>バックトレース情報 - honkaku</title>
</head>
<body>
<pre>
<?php
    class SomeClass
    {
        public function doSomething1()
        {
            $this->doSomething2('Hello');
        }

        public function doSomething2(string $arg)
        {
            $this->doSomething3($arg);
        }

        public function doSomething3(string $arg)
        {
            print_r(debug_backtrace());
        }
    }

    // メインルーチン
    $someClass = new SomeClass();
    $someClass->doSomething1();
?>
</pre>
</body>
</html>
