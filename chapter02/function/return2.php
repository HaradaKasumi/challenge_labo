<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>return命令 - honkaku</title>
</head>
<body>
    <?php
        // はじめて現れる画像の拡張子を返す関数
        function findImageExtension($extensions)
        {
            foreach ($extensions as $extension) {
                if ($extension == 'jpg' || $extension == 'gif' || $extension == 'png') {
                    return $extension;
                }
            }
            return 'NOT FOUND';
        }

        $extensions = ['pdf', 'docx', 'gif', 'exe'];
        $foundImageExtension = findImageExtension($extensions);
        echo $foundImageExtension;
    ?>
</body>
</html>
