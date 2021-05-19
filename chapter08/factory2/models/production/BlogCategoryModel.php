<?php

declare(strict_types=1);

namespace MyApplication\Models\Production;

use MyApplication\Models\BlogCategoryModelInterface;

require_once dirname(__FILE__) . '/../BlogCategoryModelInterface.php';

class BlogCategoryModel implements BlogCategoryModelInterface
{
    // データベースからブログカテゴリを取得する
    public function find(int $blogCategoryId)
    {
        echo "ID:{$blogCategoryId}を持つブログカテゴリを取得しました。";
    }
}