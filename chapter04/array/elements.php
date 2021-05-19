<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列の要素の操作 - honkaku</title>
</head>
<body>
<pre>
<?php
    $chars = ['a', 'b', 'c'];

    echo '●配列に要素を追加する', PHP_EOL;
    $chars[] = 'd'; // この書式だと1つずつしか要素を追加できない
    array_push($chars, 'e', 'f', 'g');  // array_pushを使うと1回で複数要素を追加できる
    print_r($chars);                    // 結果：a,b,c,d,e,f,g

    echo '●配列の最初に要素を追加する', PHP_EOL;
    array_unshift($chars, 'Z', 'Y', 'X');
    print_r($chars);                    // 結果：Z,Y,X,a,b,c,d,e,f,g

    echo '●2つの配列を合成する', PHP_EOL;
    $chars = array_merge($chars, ['h', 'i', 'j']);
    print_r($chars);                    // 結果：Z,Y,X,a,b,c,d,e,f,g,h,i,j

    echo '●配列の先頭の要素を取り出す。', PHP_EOL;
    $headElement = array_shift($chars);
    echo $headElement, PHP_EOL;         // 結果：Z
    print_r($chars);                    // 結果：Y,X,a,b,c,d,e,f,g,h,i,j

    echo '●配列の末尾の要素を取り出す。', PHP_EOL;
    $lastElement = array_pop($chars);
    echo $lastElement, PHP_EOL;         // 結果：j
    print_r($chars);                    // 結果：Y,X,a,b,c,d,e,f,g,h,i

    echo '●配列のキー番号2から5要素分、切り出す', PHP_EOL;
    $sliced = array_slice($chars, 2, 5);
    print_r($sliced);                   // 結果：a,b,c,d,e
    print_r($chars);                    // 結果：Y,X,a,b,c,d,e,f,g,h,i

    echo '●配列のキー番号2の要素を削除する(キーは詰まりません)', PHP_EOL;
    unset($chars[2]);
    print_r($chars);                    // 結果：Y,X,b,c,d,e,f,g,h,i
?>
</pre>
</body>
</html>
