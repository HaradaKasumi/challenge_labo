<?php

declare(strict_types=1);

namespace MyApplication\Models;

interface FriendModelInterface
{
    // ユーザの友達を取得する
    public function find(int $friendId);
}
