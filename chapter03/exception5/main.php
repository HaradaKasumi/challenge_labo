<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>例外処理 - honkaku</title>
</head>
<body>
<?php
    try {
        // 例外を起こすために故意に</data>を</DATA>と書いています。
        $parsedXml = new SimpleXMLElement('<xml><data>XML DATA</DATA></xml>');
        echo $parsedXml->data;
    } catch (Exception $exception) {
        echo '例外をキャッチしました。エラー内容：', $exception->getMessage();
    }
?>
</body>
</html>