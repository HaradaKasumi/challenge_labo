<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルの存在確認 - honkaku</title>
</head>
<body>
<pre>
<?php
    // 存在するファイルに対するfile_exists
    var_dump(file_exists('files/note.txt'));        // 結果：true

    // 存在しないファイルに対するfile_exists
    var_dump(file_exists('files/ghost.txt'));       // 結果：false

    // 存在するディレクトリに対するfile_exists
    var_dump(file_exists('files/dir1'));            // 結果：true

    // 存在しないディレクトリに対するfile_exists
    var_dump(file_exists('files/ghost-dir'));       // 結果：false
?>
</pre>
</body>
</html>