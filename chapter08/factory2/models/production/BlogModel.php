<?php

declare(strict_types=1);

namespace MyApplication\Models\Production;

use MyApplication\Models\BlogModelInterface;

require_once dirname(__FILE__) . '/../BlogModelInterface.php';

class BlogModel implements BlogModelInterface
{
    // データベースからブログ記事を取得する
    public function find(int $blogId)
    {
        echo "ID:{$blogId}を持つブログ記事を取得しました。";
    }
}