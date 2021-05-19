<?php

declare(strict_types=1);

namespace MyApplication\Models;

class BlogModel
{
    // データベースからブログ記事を取得する
    public function find(int $blogId)
    {
        echo "ID:{$blogId}を持つブログ記事を取得しました。";
    }
}