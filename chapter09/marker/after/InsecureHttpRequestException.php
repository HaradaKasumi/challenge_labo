<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/SecurityException.php';

/**
 * 安全でないHTTPリクエストを受信したことを表す例外クラス
 */
class InsecureHttpRequestException extends Exception implements SecurityException
{

}