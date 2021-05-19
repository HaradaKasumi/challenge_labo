<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ディープコピー - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Customer.php';
    require_once dirname(__FILE__) . '/Address.php';
    $customer1 = new Customer('山崎太郎', new Address('東京都', '品川区'));
    $customer2 = clone $customer1;
    $customer2->changeName('伊藤花子');
    $customer2->changeAddress('神奈川県', '横浜市');

    print_r($customer1);
    print_r($customer2);
?>
</pre>
</body>
</html>