<?php

$closure1 = function ($argument1, $argument2) {
    // 処理...
};

$closure2 = function ($argument1, $argument2) use ($variable1, $variable2) {
    // 処理...
};

// ・引数が多い時は改行を入れてよい(MAY)。
// ・引数ごとに行を分けるときは、第1引数を別行とし（MUST）、その後も1行ずつ分けて列挙する（MUST）
$closure3 = function (
    $argument1,
    $argument2,
    $argument3
) {
    // 処理...
};

$closure4 = function () use (
    $variable1,
    $variable2,
    $variable3
) {
    // 処理...
};

$closure5 = function (
    $argument1,
    $argument2,
    $argument3
) use (
    $variable1,
    $variable2,
    $variable3
) {
    // 処理...
};

$closure6 = function (
    $argument1,
    $argument2,
    $argument3
) use ($variable1) {
    // 処理...
};

$closure7 = function ($argument1) use (
    $variable1,
    $variable2,
    $variable3
) {
    // 処理...
};

// 戻り値の型指定時の記述ルールはメソッドと同じ
$closure8 = function ($argument1) use (
    $variable1,
    $variable2,
    $variable3
): string {
    // 処理...
};

// 関数の引数にクロージャーをダイレクトに書く例
someFunction(
    $argument1,
    function ($argument2) use ($variable1) {
        // 処理...
    },
    $argument3
);

