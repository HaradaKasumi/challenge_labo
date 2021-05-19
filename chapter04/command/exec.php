<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>外部コマンドの呼び出し - honkaku</title>
</head>
<body>
<pre>
<?php
    $command = 'dir C:\xampp7';

    // Unix系OSの場合は、以下のようにコマンドを書き換えてください。
    // $command = 'ls -la /tmp';

    $output = [];
    $returnVar = null;
    exec($command, $output, $returnVar);

    echo '●コマンドの出力結果は以下の通りです。', PHP_EOL;
    mb_convert_variables('UTF-8', 'SJIS-win', $output);
    foreach ($output as $line) {
        echo htmlspecialchars($line, ENT_QUOTES), PHP_EOL;
    }

    echo '●コマンドの戻り値は以下の通りです。', PHP_EOL;
    print_r($returnVar);
?>
</pre>
</body>
</html>
