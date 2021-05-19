<?php

declare(strict_types=1);

namespace MyApplication\Models;

interface BlogCategoryModelInterface
{
    // ブログカテゴリを取得する
    public function find(int $blogCategoryId);
}
