<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列 - honkaku</title>
</head>
<body>
<?php
$airports =['haneda', 'narita', 'chubu'];
$airports[] = 'kanku';
// key[2を書き換え
$airports[2] = 'aomori';
?>
<p><?php print $airports[0];?></p>
<p><?php print $airports[1];?></p>
<p><?php print $airports[2];?></p>
<p><?php print $airports[3];?></p>
</body>
<pre><?php print_r($airports); ?></pre>
</html>
