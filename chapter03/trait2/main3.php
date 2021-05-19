<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>トレイト - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    // 何らかのクラス
    class SomeClass
    {
        use SomeTraitA, SomeTraitB {
            SomeTraitB::traitMethod insteadof SomeTraitA;
            SomeTraitA::traitMethod as setA; // SomeTraitAのtraitMethodを使う時はsetAという別名を使う
        }

        public function setTraitProperty()
        {
            $this->traitMethod(null, null);
            echo $this->traitProperty, PHP_EOL;
            $this->setA(null, null);
            echo $this->traitProperty, PHP_EOL;
        }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty(); // 出力結果：「B」「A」
?>
</pre>
</body>
</html>
