<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/ItemCategoryModel.php';

/**
 * データベーステーブルitemsに関連する処理を行うクラス
 */
class ItemModel
{
    private $pdo;

    /**
     * コンストラクタ
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * 商品名の部分一致で商品を検索するメソッド
     */
    public function findItems(string $itemName): array
    {
        $items = $this->findAllItems();
        $items = $this->addCategoryName($items);
        $items = $this->findItemsByItemName($items, $itemName);
        return $items;
    }

    /**
     * itemsレコードを表す連想配列に、カテゴリ名を表すcategory_nameキーを追加するメソッド
     */
    private function addCategoryName(array $items): array
    {
        $itemCategoryModel = new ItemCategoryModel($this->pdo);
        foreach ($items as &$item) {
            $item['category_name'] = $itemCategoryModel->findCategoryName($item['category_id']);
        }
        return $items;
    }

    /**
     * itemsレコードを表す配列から、ユーザが入力した検索ワードに合致する商品名を持つレコードのみを抽出するメソッド
     */
    private function findItemsByItemName(array $items, string $itemName): array
    {
        $foundItems = [];
        foreach ($items as $item) {
            if (preg_match("/{$itemName}/u", $item['name'])) {
                $foundItems[] = $item;
            }
        }
        return $foundItems;
    }

    /**
     * itemsテーブルの全レコードを取得する
     */
    private function findAllItems(): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM items ORDER BY id DESC');
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }

}
