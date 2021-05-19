<?php

declare(strict_types=1);

namespace MyApplication\Models\Testing;

use MyApplication\Models\BlogCategoryModelInterface;

require_once dirname(__FILE__) . '/../BlogCategoryModelInterface.php';

class TestBlogCategoryModel implements BlogCategoryModelInterface
{
    // データベースを使わず、固定のブログカテゴリを取得する
    public function find(int $blogCategoryId)
    {
        echo "ID:{$blogCategoryId}を持つブログカテゴリ(テスト用の固定値)を取得しました。";
    }
}