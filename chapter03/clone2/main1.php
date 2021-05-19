<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>シャローコピー1 - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Customer.php';
    require_once dirname(__FILE__) . '/Address.php';
    $customer1 = new Customer('山崎太郎', new Address('東京都', '品川区'));
    print_r($customer1);
?>
</pre>
</body>
</html>