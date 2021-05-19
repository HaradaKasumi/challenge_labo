<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Goutteを使ったWebスプレイピング - honkaku</title>
</head>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/../../vendor/autoload.php';
    $goutteClient = new Goutte\Client();
    $crawler = $goutteClient->request('GET', 'http://localhost/honkaku/chapter10/goutte/blog-entries.html');

    /*
     * 1番目のイベントタイトルである「12/1(土)開催！フィールドアスレチック公園であそぼう」を出力する例
     */
    echo '<h2>●1番目のイベントタイトルにさまざまなルートでアクセスする例</h2>';

    // 方法1：filter()で<h1>ノードのみを抽出し、first()で、その1番目を取得。
    echo $crawler->filter('.posts > h1')->first()->text(), PHP_EOL;

    // 方法2：filter()で.postsノードのみを抽出し、eq(0)で、その1番目を取得。
    //        さらに、filter()で<h1>ノードのみを抽出。
    //        なお、eq(0)はfirst()を使っても構いません。
    echo $crawler->filter('.posts')->eq(0)->filter('h1')->text(), PHP_EOL;

    // 方法3：filter()で、#entriesノードを抽出し、children()で子ノードを抽出。
    //        さらに、first()で1番目のみを抽出し、filter()で<h1>ノードのみを抽出。
    echo $crawler->filter('#entries')->children()->first()->filter('h1')->text(), PHP_EOL;

    /*
     * 2番目のイベントタイトルである「11/1～11/30開催！DIYを手伝ってお店をつくろう」を出力する例
     */
    echo '<h2>●2番目のイベントタイトルにさまざまなルートでアクセスする例</h2>';

    // 方法1：filter()で<h1>ノードのみを抽出し、eq(1)で、その2番目を取得。
    echo $crawler->filter('.posts > h1')->eq(1)->text(), PHP_EOL;

    // 方法2：filter()で.postsノードのみを抽出し、eq(1)で、その2番目を取得。
    //        さらに、filter()で<h1>ノードのみを抽出。
    echo $crawler->filter('.posts')->eq(1)->filter('h1')->text(), PHP_EOL;

    // 方法3：filter()で、#entriesノードを抽出し、children()で子ノードを抽出。
    //        さらに、eq(1)で2番目のみを抽出し、filter()で<h1>ノードのみを抽出。
    echo $crawler->filter('#entries')->children()->eq(1)->filter('h1')->text(), PHP_EOL;

    // 方法4：filter()で1番目のイベントを取得した後、nextAll()->eq(0)で2番目に移動し、<h1>ノードを抽出。
    echo $crawler->filter('.posts')->eq(0)->nextAll()->eq(0)->filter('h1')->text(), PHP_EOL;
?>
</pre>
</body>
</html>