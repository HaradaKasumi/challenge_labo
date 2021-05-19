<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>OSコマンドの呼び出し - honkaku</title>
</head>
<body>
<pre>
<?php
    $command = 'dir C:\xampp7';

    // Unix系OSの場合は、以下のようにコマンドを書き換えてください。
    // $command = 'ls -la /tmp';

    $output = shell_exec($command);
    $output = htmlspecialchars(mb_convert_encoding($output, 'UTF-8', 'SJIS-win'), ENT_QUOTES);
    echo '●コマンドの出力結果は以下の通りです。', PHP_EOL;
    print_r($output);
?>
</pre>
</body>
</html>
