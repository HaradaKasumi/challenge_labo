<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>$_SERVER - honkaku</title>
</head>
<body>
    <h3>サーバー情報は以下の通りです。</h3>
    <table border="1">
        <tr>
            <th>PHP_SELF</th>
            <th><?=$_SERVER['PHP_SELF']?></th>
        </tr>
        <tr>
            <th>SERVER_ADDR</th>
            <th><?=$_SERVER['SERVER_ADDR']?></th>
        </tr>
        <tr>
            <th>SERVER_NAME</th>
            <th><?=$_SERVER['SERVER_NAME']?></th>
        </tr>
        <tr>
            <th>REQUEST_METHOD</th>
            <th><?=$_SERVER['REQUEST_METHOD']?></th>
        </tr>
        <tr>
            <th>QUERY_STRING</th>
            <th><?=$_SERVER['QUERY_STRING']?></th>
        </tr>
        <tr>
            <th>HTTP_REFERER</th>
            <th><?=$_SERVER['HTTP_REFERER']?></th>
        </tr>
        <tr>
            <th>HTTP_USER_AGENT</th>
            <th><?=$_SERVER['HTTP_USER_AGENT']?></th>
        </tr>
        <tr>
            <th>HTTPS</th>
            <th><?=isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : ''?></th>
        </tr>
        <tr>
            <th>REMOTE_ADDR</th>
            <th><?=$_SERVER['REMOTE_ADDR']?></th>
        </tr>
        <tr>
            <th>SCRIPT_FILENAME</th>
            <th><?=$_SERVER['SCRIPT_FILENAME']?></th>
        </tr>
        <tr>
            <th>SCRIPT_NAME</th>
            <th><?=$_SERVER['SCRIPT_NAME']?></th>
        </tr>
        <tr>
            <th>REQUEST_URI</th>
            <th><?=$_SERVER['REQUEST_URI']?></th>
        </tr>
        <tr>
            <th>PATH_INFO</th>
            <th><?=$_SERVER['PATH_INFO']?></th>
        </tr>
    </table>
</body>
</html>
