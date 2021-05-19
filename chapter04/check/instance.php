<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>インスタンス型チェック - honkaku</title>
</head>
<body>
<pre>
<?php

    abstract class AbstractFile {}

    interface Drawable {}

    class Image extends AbstractFile implements Drawable {}

    class Pdf extends AbstractFile {}

    class Nothing {}

    $pdf = new Pdf();
    var_dump($pdf instanceof Pdf);                  // 結果：true
    var_dump($pdf instanceof Image);                // 結果：false
    var_dump($pdf instanceof AbstractFile);         // 結果：true
    var_dump($pdf instanceof Drawable);             // 結果：false

    $image = new Image();
    var_dump($image instanceof Pdf);                // 結果：false
    var_dump($image instanceof Image);              // 結果：true
    var_dump($image instanceof AbstractFile);       // 結果：true
    var_dump($image instanceof Drawable);           // 結果：true

    $nothing = new Nothing();
    var_dump($nothing instanceof Pdf);              // 結果：false
    var_dump($nothing instanceof Image);            // 結果：false
    var_dump($nothing instanceof AbstractFile);     // 結果：false
    var_dump($nothing instanceof Drawable);         // 結果：false
    var_dump($nothing instanceof GhostClass);       // 結果：false
?>
</pre>
</body>
</html>
