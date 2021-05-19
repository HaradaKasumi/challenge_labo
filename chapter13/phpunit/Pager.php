<?php

declare(strict_types=1);

/**
 * ページングに必要な情報を計算するクラス。
 *
 * たとえば、「レコード総数：34」「現在のページ番号：4」「1ページあたりのレコード数：10」だった時、
 * 本クラスの計算結果は以下のようになる。
 * 
 *     $pager = new Pager(34, 4, 10);
 * 
 *     // 全レコード数
 *     echo $pager->totalCount , "\n"; // 結果：34
 * 
 *     // 現在のページ番号
 *     echo $pager->currentPage , "\n"; // 結果：4
 * 
 *     // 次ページが存在するかを表す論理値
 *     echo $pager->hasNext , "\n"; // 結果：false
 * 
 *     // 前ページが存在するかを表す論理値
 *     echo $pager->hasPrev , "\n"; // 結果：true
 * 
 *     // 2ページ以上存在するか表す論理値
 *     echo $pager->isPageExists , "\n"; // 結果：true
 * 
 *     // 最初のページ番号
 *     echo $pager->startPage , "\n"; // 結果：1
 * 
 *     // 最後のページ番号
 *     echo $pager->endPage , "\n"; // 結果：4
 * 
 *     // 1ページあたりのレコード数
 *     echo $pager->limit , "\n"; // 結果：10
 * 
 *     // 現在ページに表示される最初のレコード番号
 *     echo $pager->startIndex , "\n"; // 結果：31
 * 
 *     // 現在ページに表示される最後のレコード番号
 *     echo $pager->endIndex , "\n"; // 結果：34
 *
 */
class Pager
{
    /**
     * 表示したい全レコードのレコード数
     */
    private $count;

    /**
     * 現在ページ番号
     */
    private $currentPage;

    /**
     * 1ページあたりのレコード数
     */
    private $limit;

    /**
     * ページング情報の計算結果データ
     */
    private $pager;

    /**
     * コンストラクタ
     * @param integer $count 表示したい全レコードのレコード数
     * @param integer $currentPage 現在ページ番号
     * @param integer $limit 1ページあたりの上限レコード数
     */
    public function __construct(int $count, ?int $currentPage, int $limit)
    {
        if ($count < 0 || $currentPage < 0 || $limit <= 0) {
            throw new InvalidArgumentException('Parameter is invalid.');
        }
        $this->count = $count;
        $this->currentPage = intval($currentPage) === 0 ? 1 : intval($currentPage);
        $this->limit = $limit;
        $this->pager = $this->calculatePage();
    }

    /**
     * ページング情報を計算する。
     */
    private function calculatePage(): object
    {
        $isPageExists = $this->count > $this->limit;
        $pager = new stdClass();
        $pager->totalCount = $this->count;
        $pager->currentPage = $this->currentPage;
        $pager->isPageExists = $isPageExists;
        $pager->startPage = 1;
        $pager->endPage = intval(ceil($this->count / $this->limit));
        $pager->hasNext = $this->currentPage < $pager->endPage;
        $pager->hasPrev = $this->currentPage > 1;
        $pager->limit = $this->limit;
        $pager->startIndex = $this->calculateStartIndex();
        $pager->endIndex = $this->calculateEndIndex($pager->endPage);
        return $pager;
    }

    /**
     * 現在ページ中に表示される最初のレコード番号を計算する。
     */
    private function calculateStartIndex(): int
    {
        return $this->limit * ($this->currentPage  - 1) + 1;
    }

    /**
     * 現在ページ中に表示される最後のレコード番号を計算する。
     */
    private function calculateEndIndex(int $endPage): int
    {
        if ($this->currentPage == $endPage) {
            return $this->count;
        }
        return $this->limit * ($this->currentPage  - 1) + $this->limit;
    }

    /**
     * $this->pagerのプロパティを取得するために使うマジックメソッド
     */
    public function __get($name)
    {
        return $this->pager->{$name};
    }

    /**
     * ページング情報の計算結果データを全て返す
     */
    public function getAll()
    {
        return $this->pager;
    }
}
