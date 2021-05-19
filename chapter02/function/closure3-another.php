<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クロージャーを使わない選択 - honkaku</title>
</head>
<body>
    <?php
        // ユーザ向けの「その他」欄の出力モード
        define('EXTRA_PRINT_MODE_USER', 1);

        // 販売事業者向けの「その他」欄の出力モード
        define('EXTRA_PRINT_MODE_VENDOR', 2);

        /* あるユーザの購入履歴を表示する関数 */
        function printPurchased(array $items, int $extraPrintMode): void
        {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>購入日</th>';
            echo '<th>商品名</th>';
            echo '<th>価格</th>';
            echo '<th>その他</th>';
            echo '</tr>';
            foreach ($items as $item) {
                echo '<tr>';
                echo '<td>', $item['date'], '</td>';
                echo '<td>', $item['name'], '</td>';
                echo '<td>', $item['price'], '</td>';
                $extraData = '';
                if ($extraPrintMode === EXTRA_PRINT_MODE_USER) {
                    $extraData = "色：{$item['color']}　サイズ：{$item['size']}";
                } elseif ($extraPrintMode === EXTRA_PRINT_MODE_VENDOR) {
                    $extraData = "商品No：{$item['item-number']}　製造番号：{$item['serial']}";
                }
                echo '<td>', $extraData, '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        /* メインルーチン */

        // あるユーザが購入した商品の配列
        $items = [
            [
                'date'              => '2018-11-21',    // 購入日
                'name'              => 'ドレスシャツ',  // 商品名
                'price'             => 2160,            // 価格
                'color'             => 'white',         // 色
                'size'              => 'M',             // サイズ
                'item-number'       => 91025,           // 商品No
                'serial'            => 'PLG01219'       // 製造番号
            ],
            [
                'date'              => '2018-09-05',    // 購入日
                'name'              => 'キッズパジャマ',// 商品名
                'price'             => 1620,            // 価格
                'color'             => 'red',           // 色
                'size'              => 110,             // サイズ
                'item-number'       => 90081,           // 商品No
                'serial'            => 'ZAQ80124'       // 製造番号
            ]
        ];

        echo 'ユーザ向け購入履歴ページを出力します...<br>';
        printPurchased($items, EXTRA_PRINT_MODE_USER);

        echo '<br>販売事業者向け購入履歴ページを出力します...<br>';
        printPurchased($items, EXTRA_PRINT_MODE_VENDOR);
    ?>
</body>
</html>
