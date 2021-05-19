<?php

declare(strict_types=1);

namespace MyApplication\Models;

class FriendModel
{
    // データベースからユーザの友達を取得する
    public function find(int $friendId)
    {
        echo "ID:{$friendId}を持つ友達を取得しました。";
    }
}