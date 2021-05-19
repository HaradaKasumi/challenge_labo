<?php

declare(strict_types=1);

// HTTPメソッド「GET」に対応する関数
function getMessage()
{
    $response = [
        'status' => 'success',
        'message' => 'ユーザID：' . $_GET['userId'] . 'が持つ' . $_GET['days'] . '日以内のメッセージを取得しました。'
    ];
    return $response;
}

// HTTPメソッド「POST」に対応する関数
function postMessage()
{
    $response = [
        'status' => 'success',
        'message' => 'ユーザID：' . $_POST['userId'] . 'によるメッセージ「' . $_POST['message'] . '」を投稿しました。'
    ];
    return $response;
}

// HTTPメソッド「PUT」に対応する関数
function putMessage()
{
    parse_str(file_get_contents('php://input'), $putRequest);
    $response = [
        'status' => 'success',
        'message' => 'メッセージID：' . $putRequest['messageId'] . 'のメッセージを「' . $putRequest['message'] . '」に変更しました。'
    ];
    return $response;
}

// HTTPメソッド「DELETE」に対応する関数
function deleteMessage()
{
    parse_str(file_get_contents('php://input'), $deleteRequest);
    $response = [
        'status' => 'success',
        'message' => 'メッセージID：' . $deleteRequest['messageId'] . 'のメッセージを削除しました。'
    ];
    return $response;
}

// メインルーチン
switch (strtolower($_SERVER['REQUEST_METHOD'])) {
    case 'get':
        echo json_encode(getMessage());
        break;
    case 'post':
        echo json_encode(postMessage());
        break;
    case 'put':
        echo json_encode(putMessage());
        break;
    case 'delete':
        echo json_encode(deleteMessage());
        break;
}
