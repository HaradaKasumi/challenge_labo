<?php

declare(strict_types=1);

// 本プログラムはコマンドラインで実行してください。

$input = 'example.com & echo %PATH%';

echo '●エスケープ前のコマンド', PHP_EOL;
$command = 'nslookup ' . $input;
echo $command, PHP_EOL;

echo '●エスケープ後のコマンド', PHP_EOL;
$command = 'nslookup ' . escapeshellarg($input);
echo $command, PHP_EOL;
