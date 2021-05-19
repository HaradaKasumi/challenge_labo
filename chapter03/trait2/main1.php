<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>トレイト - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    // 何らかのクラス
    class SomeClass
    {
        use SomeTraitA, SomeTraitB;

        public function setTraitProperty()
        {
            // どちらのトレイトが持つtraitMethodのことか分からないため、エラーとなる
            $this->traitMethod(null, null);
            echo $this->traitProperty;
        }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty();
?>
</body>
</html>
