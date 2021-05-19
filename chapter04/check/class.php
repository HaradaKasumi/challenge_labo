<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クラスなどの存在チェック - honkaku</title>
</head>
<body>
<pre>
<?php
    class SomeClass
    {
        public static function doStatic() {}

        public function doPublic() {}

        private function doPrivate() {}
    }

    $someClass = new SomeClass();

    var_dump(class_exists('SomeClass', false));             // 結果：true
    var_dump(class_exists('GhostClass', false));            // 結果：false

    require_once dirname(__FILE__) . '/classes/ExternalClass1.php';
    var_dump(class_exists('ExternalClass1', false));            // 結果：true
    var_dump(class_exists('ExternalClass2', false));            // 結果：false(require_onceしていないためfalse)

    var_dump(method_exists($someClass, 'doPublic'));        // 結果：true
    var_dump(method_exists($someClass, 'doPrivate'));       // 結果：true
    var_dump(method_exists('SomeClass', 'doPublic'));       // 結果：true
    var_dump(method_exists('SomeClass', 'doStatic'));       // 結果：true
    var_dump(method_exists($someClass, 'doNothing'));       // 結果：false

    var_dump(is_callable([$someClass, 'doPublic']));        // 結果：true
    var_dump(is_callable([$someClass, 'doPrivate']));       // 結果：false(privateメソッドは呼べない)
    var_dump(is_callable([$someClass, 'doStatic']));        // 結果：true
    var_dump(is_callable([$someClass, 'doPrivate'], true)); // 結果：true

    function calc() {}
    var_dump(is_callable('calc'));                          // 結果：true
    var_dump(function_exists('calc'));                      // 結果：true
    var_dump(function_exists('nothing'));                   // 結果：false
?>
</pre>
</body>
</html>
