<?php

declare(strict_types=1);

namespace MyApplication;

use MyApplication\Models\UserModelInterface;
use MyApplication\Models\FriendModelInterface;
use MyApplication\Models\BlogModelInterface;
use MyApplication\Models\BlogCategoryModelInterface;
use MyApplication\Models\Production\UserModel;
use MyApplication\Models\Production\FriendModel;
use MyApplication\Models\Production\BlogModel;
use MyApplication\Models\Production\BlogCategoryModel;

require_once dirname(__FILE__) . '/AbstractDatabaseModelFactory.php';
require_once dirname(__FILE__) . '/models/production/UserModel.php';
require_once dirname(__FILE__) . '/models/production/FriendModel.php';
require_once dirname(__FILE__) . '/models/production/BlogModel.php';
require_once dirname(__FILE__) . '/models/production/BlogCategoryModel.php';

// データベースに接続するモデルクラスのインスタンスを返すFactoryクラス
class DatabaseModelFactory extends AbstractDatabaseModelFactory
{
    // UserModelインスタンスを返す
    public function createUserModel(): UserModelInterface
    {
        return new UserModel();
    }

    // FriendModelインスタンスを返す
    public function createFriendModel(): FriendModelInterface
    {
        return new FriendModel();
    }

    // BlogModelインスタンスを返す
    public function createBlogModel(): BlogModelInterface
    {
        return new BlogModel();
    }

    // BlogCategoryModelインスタンスを返す
    public function createBlogCategoryModel(): BlogCategoryModelInterface
    {
        return new BlogCategoryModel();
    }
}
