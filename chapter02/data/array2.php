<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>連想配列 - honkaku</title>
</head>
<body>
<?php
$user = [
    'name' => '山下次郎',
         'age' => '30',
    'place' => '有田',
];
$user['job'] = '伝統工芸士';
$user['hobby'] = 'パン作り';
echo $user['name'];
echo $user['age'];
echo $user['job'];
var_dump($user);

$test = [];
print $test[0] = 'test0';
print $test[1] = 'test1';
print $test[2] = 'test2';
print $test['key'] = 'key';
var_dump($test);
?>
</body>
</html>
