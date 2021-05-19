<?php

declare(strict_types=1);

namespace MyApplication\Models;

interface BlogModelInterface
{
    // ブログ記事を取得する
    public function find(int $blogId);
}
