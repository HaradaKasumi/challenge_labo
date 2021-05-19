<?php

/**
 * ここを、取得したAPIキー値に書き換えてください。
 */
define('API_KEY', 'API-KEY-HERE');

/**
 * 文章を感情分析APIに送信し、結果を返す関数
 */
function analyzeSentiment(string $sentence)
{
    $postData = [
        'document' => [
            'type' => 'PLAIN_TEXT',
            'language' => 'ja',
            'content' => $sentence
        ],
        'encodingType' => 'UTF8',
    ];
    $postData = json_encode($postData);
    $url = 'https://language.googleapis.com/v1/documents:analyzeSentiment?key=' . API_KEY;
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($handle, CURLOPT_POSTFIELDS, $postData);
    curl_setopt(
        $handle,
        CURLOPT_HTTPHEADER,
        [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($postData)
        ]
    );
    $result = curl_exec($handle);
    curl_close($handle);
    return $result;
}
