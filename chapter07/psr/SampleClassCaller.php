<?php

// ・メソッド名直後の丸括弧の前にスペースを入れない（MUST NOT）
// ・開き丸括弧の直後、閉じ丸括弧の直前にスペースを入れない（MUST NOT）
// ・引数を区切るカンマの前にスペースを入れない（MUST NOT）
// ・引数を区切るカンマの後にスペース1つを入れる（MUST）
$sampleClass = new SampleClass();
$sampleClass->doSomething($argument1, $argument2);

// ・引数ごとに改行を入れてもよい（MAY）
// ・引数ごとに行を分けるときは、第1引数を別行とし（MUST）、その後も1行ずつ分けて列挙する（MUST）
$sampleClass->doSomething(
        $argument1,
        $argument2
);

// staticメソッドをコールする時も同じルール
StaticClass::someFunction($argument1, $argument2);

// 関数をコールする時も同じルール
someFunction($argument1, $argument2);

