<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JSONデータを扱う - honkaku</title>
</head>
<body>
    <?php
        class Novel
        {
            public $title;
            public $author;
            public function __construct($title, $author)
            {
                $this->title = $title;
                $this->author = $author;
            }
        }
        $novels = [
            new Novel('斜陽', '太宰治'),
            new Novel('The Catcher in the Rye', 'Jerome David Salinger'),
        ];
        echo json_encode($novels);
    ?>
</body>
</html>