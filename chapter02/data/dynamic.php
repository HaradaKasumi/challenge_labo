<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>可変変数 - honkaku</title>
</head>
<body>
    <?php
        $user1 = 'Taro YAMADA';
        $user2 = 'Hana SUZUKI';
        $user3 = 'Makoto NISHIKAWA';
        $selectedNumber = 2;
    ?>
    <p>こんにちは、<?php echo ${'user' . $selectedNumber}; ?>さん。</p>
</body>
</html>
