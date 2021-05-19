<?php

declare(strict_types=1);

// 拡張子を生成する関数。ここでは .jpg, .png, .gif にのみ対応する。
function generateExtension(string $filePath)
{
    // MIMEタイプを取得する。
    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($fileInfo, $filePath);
    finfo_close($fileInfo);

    // MIMEタイプを元に、拡張子を決める。
    $extension = null;
    switch (strtolower($mimeType)) {
        case "image/jpeg":
            $extension = 'jpg';
            break;
        case "image/png":
            $extension = 'png';
            break;
        case "image/gif":
            $extension = 'gif';
            break;
    }
    return $extension;
}

// メインルーチン
parse_str(file_get_contents('php://input'), $request);

// Base64エンコードされたファイルの実体をBase64デコードし、拡張子の無い仮のファイル名でサーバー上に保存する。
$tmpFileName = dirname(__FILE__) . '/' . date('Ymd-His') . '-' . random_int(100000, 999999);
file_put_contents($tmpFileName, base64_decode($request['attachment']));

// サーバー上に保存された仮ファイルのMIMEタイプを取得する。
$extension = generateExtension($tmpFileName);

// 許可されていないMIMEタイプの時はエラーとする。
if ($extension === null) {
    $response = [
        'status' => 'error',
        'message' => '許可されていないファイル形式です。'
    ];
    echo json_encode($response);
    return;
}

// 仮ファイルを拡張子付きの正式なファイル名にリネームする。
$savedFileName = dirname(__FILE__) . '/attachment-' . $request['messageId'] . '.' . $extension;
rename($tmpFileName, $savedFileName);

// レスポンスデータを出力する。
$response = [
    'status' => 'success',
    'message' => 'メッセージID：' . $request['messageId'] . 'のメッセージにファイルを添付しました。サーバー上のファイル名は' . basename($savedFileName) . 'になりました。'
];
echo json_encode($response);
