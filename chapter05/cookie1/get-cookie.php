<?php declare(strict_types=1);
setcookie("name1", 'value1', time() + 60 * 60, '/', '', false, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cookie変数</title>
    </head>
    <body>
        webブラウザからのCookie
        <pre><?php print_r($_COOKIE)?></pre>
    </body>
</html>
