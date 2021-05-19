<?php 

declare(strict_types=1);

require_once dirname(__FILE__) . '/EventData.php';
require_once dirname(__FILE__) . '/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>クッキーの利用 - honkaku</title>
</head>
<body>
    <h2>イベント一覧</h2>
    <ul>
        <?php foreach ($eventData as $eventId => $eventTitle) : ?>
            <li>
                <a href="./event-detail.php?eventId=<?=escape(strval($eventId))?>">
                    <?=escape($eventTitle)?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>最近アクセスしたページ</h2>
    <?php if (isset($_COOKIE['recentItems'])) : ?>
        <ul>
            <?php foreach ($_COOKIE['recentItems'] as $eventId => $accessed) : ?>
                <li>
                    <a href="./event-detail.php?eventId=<?=escape(strval($eventId))?>">
                        <?=escape($eventData[$eventId])?>
                    </a>
                    (アクセス日時：<?=escape($accessed)?>)
                </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
</body>
</html>
