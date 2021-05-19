<?php

declare(strict_types=1);

namespace MyApplication\Models\Production;

use MyApplication\Models\FriendModelInterface;

require_once dirname(__FILE__) . '/../FriendModelInterface.php';

class FriendModel implements FriendModelInterface
{
    // データベースからユーザの友達を取得する
    public function find(int $friendId)
    {
        echo "ID:{$friendId}を持つ友達を取得しました。";
    }
}