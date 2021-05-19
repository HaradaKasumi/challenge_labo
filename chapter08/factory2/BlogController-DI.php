<?php

declare(strict_types=1);

namespace MyApplication;

require_once dirname(__FILE__) . '/DatabaseModelFactory.php';
require_once dirname(__FILE__) . '/TestDatabaseModelFactory.php';

// ブログページを表示するクラス
class BlogController
{
    // AbstractDatabaseModelFactoryインスタンス
    private $modelFactory;

    // コンストラクタ
    public function __construct(AbstractDatabaseModelFactory $modelFactory)
    {
        $this->modelFactory = $modelFactory;
    }

    // ブログ記事ページを表示する
    public function show(int $userId, int $blogId): void
    {
        // ユーザ情報を取得する
        $user = $this->modelFactory->createUserModel()->find($userId);

        // ブログ記事を取得する
        $blog = $this->modelFactory->createBlogModel()->find($blogId);

        // ブログ記事ページを表示する処理...
    }
}

// メインルーチン
$isTesting = true;

if ($isTesting) {
    $modelFactory = new TestDatabaseModelFactory();
} else {
    $modelFactory = new DatabaseModelFactory();
}

$controller = new BlogController($modelFactory);
$controller->show(1001, 2001);
