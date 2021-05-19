<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>インクリメント・デクリメント - honkaku</title>
</head>
<body>
    <?php $num = 7; ?>
    <?php $added = ++$num; ?>
    <p>前置インクリメント時のnum：<?=$num?></p>
    <p>前置インクリメント時のadded：<?=$added?></p>

    <?php $num = 7; ?>
    <?php $added = $num++; ?>
    <p>後置インクリメント時のnum：<?=$num?></p>
    <p>後置インクリメント時のadded：<?=$added?></p>
</body>
</html>
