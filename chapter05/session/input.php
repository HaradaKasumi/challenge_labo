<?php

declare(strict_types=1); 

function validate()
{
    return ($_POST['email'] !== '' && $_POST['message'] !== '');
}
session_start();
// 条件①
if (isset($_POST['operation']) && $_POST['operation'] === 'inquiry') {
    // 条件①-A
    if (validate() === false) {
        $message = 'メールアドレス・お問い合わせ内容のいずれも必須入力です。';
        $data = [
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];
    // 条件①-B
    } else {
        $_SESSION['data'] = [
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];
        header('Location: confirm.php');
        return;
    }
// 条件②
} elseif (isset($_SESSION['data'])) {
    $data = [
        'email' => $_SESSION['data']['email'],
        'message' => $_SESSION['data']['message']
    ];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>セッションの利用 - honkaku</title>
</head>
<body>
    <h2>お問い合わせ入力</h2>
    <?php if (isset($message)) : ?>
        <p style="color:red"><?=$message?></p>
    <?php endif; ?>
    <form name="inquiry-form" action="" method="POST">
        ●メールアドレス：<br>
        <input type="text" name="email" value="<?=isset($data['email']) ? $data['email'] : ''?>"><br>
        ●お問い合わせ内容：<br>
        <textarea name="message" cols="30" rows="4"><?=isset($data['message']) ? $data['message'] : ''?></textarea><br>
        <button type="submit" name="operation" value="inquiry">送信</button>
    </form>
</body>
</html>
