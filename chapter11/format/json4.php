<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JSONデータを扱う - honkaku</title>
</head>
<body>
<pre>
<?php
    $jsonValue = <<< VALUE
        [
            {
                "title": "\u659c\u967d",
                "author": "\u592a\u5bb0\u6cbb"
            },
            {
                "title": "こころ",
                "author": "夏目漱石"
            },
            {
                "title": "The Catcher in the Rye",
                "author": "Jerome David Salinger"
            }
        ]
VALUE;
    $decoded = json_decode($jsonValue, true);
    print_r($decoded);
?>
</pre>
</body>
</html>