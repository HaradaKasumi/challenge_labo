<?php

declare(strict_types=1);

namespace MyApplication;

require_once dirname(__FILE__) . '/DatabaseModelFactory.php';

// ブログページを表示するクラス
class BlogController
{
    // DatabaseModelFactoryインスタンス
    private $modelFactory;

    // コンストラクタ
    public function __construct()
    {
        $this->modelFactory = new DatabaseModelFactory();
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
$controller = new BlogController();
$controller->show(1001, 2001);