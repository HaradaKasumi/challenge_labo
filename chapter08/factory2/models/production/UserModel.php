<?php

declare(strict_types=1);

namespace MyApplication\Models\Production;

use MyApplication\Models\UserModelInterface;

require_once dirname(__FILE__) . '/../UserModelInterface.php';

class UserModel implements UserModelInterface
{
    // データベースからユーザ情報を取得する
    public function find(int $userId)
    {
        echo "ID:{$userId}を持つユーザ情報を取得しました。";
    }
}