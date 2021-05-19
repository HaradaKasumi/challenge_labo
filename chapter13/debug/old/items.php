<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品データの表示 - honkaku</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__) . '/ItemModel.php';
        require_once dirname(__FILE__) . '/Pager.php';

        // 1ページあたり、最大10レコードを表示します。
        $countPerPage = 10;

        // 現在のページ番号
        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

        $itemModel = new ItemModel();
        $items = $itemModel->find(($currentPage - 1) * $countPerPage, $countPerPage);
        $pager = new Pager($itemModel->countAll(), $currentPage, $countPerPage);
    ?>

    <h1>商品データ(<?=$currentPage?>ページ目)</h1>
    <table border="1">
        <?php foreach ($items as $item) : ?>
            <tr>
                <td><?=$item?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <p>ページ移動：</p>
    <?php for ($page = $pager->startPage; $page <= $pager->endPage; $page++) : ?>
        <?php if ($page === $currentPage) : ?>
            <?=$page?>&nbsp;
        <?php else : ?>
            <a href="?page=<?=$page?>"><?=$page?></a>&nbsp;
        <?php endif; ?>
    <?php endfor;?>
</body>
</html>
