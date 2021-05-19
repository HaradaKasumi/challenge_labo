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
    <h2>ループ処理で連想配列に変換</h2>
    <?php
        $datas = $crawler->filter('.posts')->each(function ($post) {
            return [
                'posted' => $post->attr('data-posted'),
                'title' => $post->filter('h1')->text(),
                'contents' => $post->filter('p')->text(),
            ];
        });
    ?>
    <pre><?php print_r($datas);?></pre>
</body>
</html>