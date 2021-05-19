<?php

declare(strict_types=1);

namespace MyApplication;

use MyApplication\Models\UserModelInterface;
use MyApplication\Models\FriendModelInterface;
use MyApplication\Models\BlogModelInterface;
use MyApplication\Models\BlogCategoryModelInterface;

abstract class AbstractDatabaseModelFactory
{
    abstract public function createUserModel(): UserModelInterface;

    abstract public function createFriendModel(): FriendModelInterface;

    abstract public function createBlogModel(): BlogModelInterface;

    abstract public function createBlogCategoryModel(): BlogCategoryModelInterface;
}
