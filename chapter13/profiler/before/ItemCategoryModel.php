<?php

declare(strict_types=1);

/**
 * データベーステーブルitem_categoriesに関連する処理を行うクラス
 */
class ItemCategoryModel
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
     * カテゴリIDに応じたカテゴリ名称を取得するメソッド
     */
    public function findCategoryName(int $categoryId): string
    {
        $categories = $this->findAllCategories();
        $categoryName = $this->findCategoryNameById($categories, $categoryId);
        return $categoryName;
    }

    /**
     * カテゴリIDを元に、カテゴリ名を取得するメソッド
     */
    private function findCategoryNameById(array $categories, int $categoryId): string
    {
        foreach ($categories as $category) {
            if ($category['id'] === $categoryId) {
                return $category['category'];
            }
        }
        return '';
    }

    /**
     * 商品カテゴリの全レコードを取得するメソッド
     */
    private function findAllCategories(): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM item_categories ORDER BY id DESC');
        $statement->execute();
        $categories = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}
