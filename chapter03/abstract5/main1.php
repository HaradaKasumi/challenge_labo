<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>継承とコンストラクタ1 - honkaku</title>
</head>
<body>
<?php
    class SuperClass
    {
        protected $data1;
        public function __construct(string $data1)
        {
            $this->data1 = $data1;
            echo $this->data1;
        }
    }
    class SubClass extends SuperClass
    {
        // 特に何も記述なし
    }
    $subClass = new SubClass('This is data1.'); // 出力結果「This is data1.」
?>
</body>
</html>