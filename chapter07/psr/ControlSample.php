<?php

/*
 * if構文の書き方（1）
 */
if ($mode === 1) {
    // 処理...
} elseif ($mode === 2) { // ←else ifよりもelseifを使った方がよい（SHOULD）
    // 処理...
} else {
    // 処理...
}

/*
 * if構文の書き方（2）
 */
// ・複数の条件式を別行に書いてもよい（MAY）
// ・別行に書くときは、1つ目の条件式から別行でなければならない（MUST）
// ・「) {」は独立した1行に書かねばならない（MUST）
// ・「&&」や「||」のような論理演算子は行頭か行末のいずれかに統一して書く（MUST）
if (
    $mode === 1
    || $mode === 2
    || $mode === 3
) {
    // 処理...
}

/*
 * switch構文の書き方
 */
// ※複数の条件式を別行に書くときは「if構文の書き方（2）」参照。
switch ($mode) {
    // ・caseはswitchよりも1つ多く字下げを入れる（MUST）
    case 0:
        echo '0の時の処理';
        break; // break命令はcaseよりも1つ多く字下げを入れる（MUST）
    case 1:
        echo '1の時の処理';
        // ここではbreakしません
        // ↑breakしない旨をコメント文として残す（MUST）
    case 2:
    case 3:
        echo '1,2,3の時の処理';
        return;
    default:
        echo 'それ以外の処理';
        break;
}

/*
 * ループの書き方
 */
while ($endOfFile !== true) {
    // 処理...
    break;
}

for ($i = 0; $i < 10; $i++) {
    // 処理...
}

foreach ($items as $key => $value) {
    // 処理...
}

/*
 * try～catch構文の書き方
 */
try {
    // 処理...
} catch (IllegalStateException $ise) {
    // 処理...
} catch (Exception $e) {
    // 処理...
} finally {
    // 処理...
}
