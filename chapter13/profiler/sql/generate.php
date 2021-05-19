<?php

$categories = [
    // 照明器具
    1 => ['シーリングライト', '卓上ライト', 'LED蛍光灯', 'おしゃれライト'],

    // 清掃
    2 => ['ロボット型クリーナー', '掃除機', 'ハンディクリーナー', 'コードレス掃除機'],

    // 空調
    3 => ['エアコン', '扇風機', '加湿器', '空気清浄機'],

    // キッチン
    4 => ['冷蔵庫', 'オーブン', '電子レンジ', '炊飯器', 'ポット'],

    // 理容
    5 => ['シェーバー', 'ドライヤー', 'こて', '美肌スチーマー', '目元マッサージ機'],

    // ビジュアル
    6 => ['液晶テレビ', 'ブルーレイレコーダー', 'ビデオカメラ', 'デジタルカメラ', 'DVDプレーヤー', 'ブルーレイプレーヤー'],

    // 音響
    7 => ['ミニコンポ', 'MP3プレーヤー', 'ネットワークプレーヤー', 'ラジオ', 'ICレコーダー']
];

for ($i = 0; $i < 20000; $i++) {
    $itemNumber = $i + 1;
    $categoryId = rand(1, 7);
    $itemCount = count($categories[$categoryId]);
    $itemName  = '商品' . $itemNumber . ' - ' . $categories[$categoryId][rand(0, $itemCount - 1)];
    $sql = "INSERT INTO items(category_id, name) VALUES({$categoryId}, '{$itemName}')";
    echo $sql . "\n";
}
