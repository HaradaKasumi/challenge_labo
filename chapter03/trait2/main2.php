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
        use SomeTraitA, SomeTraitB {
            SomeTraitB::traitMethod insteadof SomeTraitA; // traitMethodメソッドを使う時はSomeTraitBを選ぶ
        }

        public function setTraitProperty()
        {
            $this->traitMethod(null, null); // SomeTraitBのメソッドを使う
            echo $this->traitProperty;
        }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty(); // 出力結果：「B」
?>
</body>
</html>
