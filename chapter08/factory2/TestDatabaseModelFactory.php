<?php

declare(strict_types=1);

namespace MyApplication;

use MyApplication\Models\UserModelInterface;
use MyApplication\Models\FriendModelInterface;
use MyApplication\Models\BlogModelInterface;
use MyApplication\Models\BlogCategoryModelInterface;
use MyApplication\Models\Testing\TestUserModel;
use MyApplication\Models\Testing\TestFriendModel;
use MyApplication\Models\Testing\TestBlogModel;
use MyApplication\Models\Testing\TestBlogCategoryModel;

require_once dirname(__FILE__) . '/AbstractDatabaseModelFactory.php';
require_once dirname(__FILE__) . '/models/testing/TestUserModel.php';
require_once dirname(__FILE__) . '/models/testing/TestFriendModel.php';
require_once dirname(__FILE__) . '/models/testing/TestBlogModel.php';
require_once dirname(__FILE__) . '/models/testing/TestBlogCategoryModel.php';

// テストデータ用モデルクラスのインスタンスを返すFactoryクラス
class TestDatabaseModelFactory extends AbstractDatabaseModelFactory
{
    // TestUserModelインスタンスを返す
    public function createUserModel(): UserModelInterface
    {
        return new TestUserModel();
    }

    // TestFriendModelインスタンスを返す
    public function createFriendModel(): FriendModelInterface
    {
        return new TestFriendModel();
    }

    // TestBlogModelインスタンスを返す
    public function createBlogModel(): BlogModelInterface
    {
        return new TestBlogModel();
    }

    // TestBlogCategoryModelインスタンスを返す
    public function createBlogCategoryModel(): BlogCategoryModelInterface
    {
        return new TestBlogCategoryModel();
    }
}
