<?php require_once dirname(__FILE__) . '/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>感情分析API - honkaku</title>
</head>
<body>
    <h1>コメントを入力してください。</h1>
    <form name="comment-form" action="" method="post">
        <textarea name="comment" rows="10" style="width:50%"><?=isset($_POST['comment']) ? htmlspecialchars($_POST['comment'], ENT_QUOTES) : ''?></textarea><br>
        <button type="submit" name="operation" value="send">コメント送信</button>
    </form>
    <?php if (isset($_POST['operation']) && $_POST['operation'] === 'send') : ?>
        <?php $analyzed = analyzeSentiment($_POST['comment']) ?>
        <p>コメントの分析結果：</p>
        <pre><?php print_r(json_decode($analyzed)); ?></pre>
    <?php endif; ?>
</body>
</html>
