<?php

declare(strict_types=1);

namespace MyApplication\Models\Testing;

use MyApplication\Models\FriendModelInterface;

require_once dirname(__FILE__) . '/../FriendModelInterface.php';

class TestFriendModel implements FriendModelInterface
{
    // データベースを使わず、固定の友達データを取得する
    public function find(int $friendId)
    {
        echo "ID:{$friendId}を持つ友達(テスト用の固定値)を取得しました。";
    }
}