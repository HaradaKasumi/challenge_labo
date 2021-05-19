<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/SecurityException.php';

/**
 * ログインセッションに安全でない値が含まれていることを表す例外クラス
 */
class InsecureLoginSessionException extends Exception implements SecurityException
{

}