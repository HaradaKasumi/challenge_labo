<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DELETEリクエストの送信 - honkaku</title>
</head>
<body>
    <?php
        $params = [
            'userId' => 1001,
            'messageId' => 'm900001',
        ];
        $url = 'http://localhost/honkaku/chapter11/api-server/message.php';
        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = json_decode(curl_exec($handle), true);
        curl_close($handle);
    ?>
    <p>サーバーからの応答：</p>
    <pre><?php print_r($apiResponse); ?></pre>
</body>
</html>
