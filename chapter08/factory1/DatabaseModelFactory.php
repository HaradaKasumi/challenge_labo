<?php

declare(strict_types=1);

namespace MyApplication;

use MyApplication\Models\UserModel;
use MyApplication\Models\FriendModel;
use MyApplication\Models\BlogModel;
use MyApplication\Models\BlogCategoryModel;

require_once dirname(__FILE__) . '/models/UserModel.php';
require_once dirname(__FILE__) . '/models/FriendModel.php';
require_once dirname(__FILE__) . '/models/BlogModel.php';
require_once dirname(__FILE__) . '/models/BlogCategoryModel.php';

// データベースアクセスクラスのインスタンスを返すFactoryクラス
class DatabaseModelFactory
{
    // UserModelインスタンスを返す
    public function createUserModel(): UserModel
    {
        return new UserModel();
    }

    // FriendModelインスタンスを返す
    public function createFriendModel(): FriendModel
    {
        return new FriendModel();
    }

    // BlogModelインスタンスを返す
    public function createBlogModel(): BlogModel
    {
        return new BlogModel();
    }

    // BlogCategoryModelインスタンスを返す
    public function createBlogCategoryModel(): BlogCategoryModel
    {
        return new BlogCategoryModel();
    }
}
