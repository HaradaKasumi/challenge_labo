<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Goutteを使ったWebスプレイピング - honkaku</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__) . '/../../vendor/autoload.php';
        $goutteClient = new Goutte\Client();
        $crawler = $goutteClient->request('GET', 'http://localhost/honkaku/chapter10/goutte/blog-entries.html');
        $looped = 0;
    ?>
    <h2>ループ処理で出力</h2>
    <?php
        $crawler->filter('.posts')->each(function ($post) use (&$looped) {
            $looped++;
            echo '<h4>投稿', $looped, '</h4>';
            echo '<ul>';
            echo '<li>投稿日', $post->attr('data-posted'), '</li>';
            echo '<li>タイトル', $post->filter('h1')->text(), '</li>';
            echo '<li>内容', $post->filter('p')->text(), '</li>';
            echo '</ul>';
        });
    ?>
</body>
</html>