<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>継承とコンストラクタ2 - honkaku</title>
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
        protected $data2;

        // スーパークラスのコンストラクタよりも引数が1つ多いコンストラクタ
        public function __construct(string $data1, string $data2)
        {
            $this->data1 = $data1;
            $this->data2 = $data2;
            echo $this->data1, $this->data2;
        }

    }
    $subClass = new SubClass('This is data1.', 'This is data2.'); // 出力結果「This is data1.This is data2.」

    // スーパークラスのコンストラクタはサブクラスに上書きされてしまったため、以下はエラーとなる
    // $subClass = new SubClass('This is data1.'); 
?>
</body>
</html>