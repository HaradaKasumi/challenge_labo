<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>性能テスト - honkaku</title>
</head>
<body>
    <?php
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '0');
        define('TARGET_URL', 'http://localhost/honkaku/chapter10/performance/write.php');

        require_once dirname(__FILE__) . '/../../vendor/autoload.php';

        for ($loopCount = 1000; $loopCount <= 10000; $loopCount = $loopCount + 1000) {
            $timeList = $memoryList = [];

            // 同じ$loopCountで、write.phpへのアクセスを5回試行する
            for ($i = 0; $i < 5; $i++) {
                $goutteClient = new Goutte\Client();
                $crawler = $goutteClient->request('GET', TARGET_URL . '?' . http_build_query(['loop' => $loopCount]));

                // 処理時間を$timeList配列に追加
                $matched = [];
                preg_match('/処理時間：([0-9\.]+)秒/u', $crawler->filter('#time')->text(), $matched);
                $timeList[$i] = floatval($matched[1]);

                // 使用メモリ量を$memoryList配列に追加
                $matched = [];
                preg_match('/使用メモリ量：([0-9\.]+)MB/u', $crawler->filter('#mem')->text(), $matched);
                $memoryList[$i] = floatval($matched[1]);

                sleep(2);
            }

            // 5回試行した結果の処理時間・メモリ量の平均値を計算する
            echo '■ループ回数：', $loopCount, '<br>';
            echo '　処理時間：', array_sum($timeList) / count($timeList), '<br>';
            echo '　最大メモリ量：', array_sum($memoryList) / count($memoryList), '<br><br>';
        }
    ?>
</body>
</html>