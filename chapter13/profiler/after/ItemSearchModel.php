<?php

declare(strict_types=1);

/**
 * 商品検索機能に関連するビジネスロジックを記述したクラス
 */
class ItemSearchModel
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
        if (!$itemName) {
            return []; // 検索ワード未入力の時は空の配列を返す
        }
        $sql  = '';
        $sql .= ' SELECT items.*, cat.category as category_name FROM items ';
        $sql .= ' LEFT OUTER JOIN item_categories cat ON items.category_id = cat.id ';
        $sql .= " WHERE name like :item_name ";
        $sql .= ' ORDER BY items.id DESC ';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':item_name', "%{$itemName}%", PDO::PARAM_STR);
        $statement->execute();
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }
}
