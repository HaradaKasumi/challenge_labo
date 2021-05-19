<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>URLエンコード - honkaku</title>
</head>
<body>
    <a href="to.php?message=あ&い&う&え&お">URLエンコードしないリンク</a><br>
    <a href="to.php?message=<?=urlencode('あ&い&う&え&お')?>">URLエンコードしたリンク</a>
</body>
</html>