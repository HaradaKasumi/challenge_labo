<?php

declare(strict_types=1);

namespace MyApplication\Models;

class BlogCategoryModel
{
    // データベースからブログカテゴリを取得する
    public function find(int $blogCategoryId)
    {
        echo "ID:{$blogCategoryId}を持つブログカテゴリを取得しました。";
    }
}