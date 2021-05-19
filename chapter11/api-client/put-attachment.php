<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PUTリクエストによるファイル送信 - honkaku</title>
</head>
<body>
    <?php
        $params = [
            'messageId' => 'm900001',
            'attachment' => base64_encode(file_get_contents('sun.jpg'))
        ];
        $url = 'http://localhost/honkaku/chapter11/api-server/message-attachment.php';
        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = json_decode(curl_exec($handle), true);
        curl_close($handle);
    ?>
    <p>サーバーからの応答：</p>
    <pre><?php print_r($apiResponse); ?></pre>
</body>
</html>
