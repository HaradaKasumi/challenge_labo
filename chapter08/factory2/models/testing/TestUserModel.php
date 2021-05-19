<?php

declare(strict_types=1);

namespace MyApplication\Models\Testing;

use MyApplication\Models\UserModelInterface;

require_once dirname(__FILE__) . '/../UserModelInterface.php';

class TestUserModel implements UserModelInterface
{
    // データベースを使わず、固定のユーザ情報を取得する
    public function find(int $userId)
    {
        echo "ID:{$userId}を持つユーザ情報(テスト用の固定値)を取得しました。";
    }
}