<?php

class pager
{
    /**
     * 表示したい全レコードのレコード数
     */
    private $count;

    /**
     * 現在ページ番号
     */
    private $CurrentPage;

    /**
     * 1ページあたりのレコード数
     */
    private $limit;

    /**
     * ページング情報の計算結果データ
     */
    private $pager;

    /**
     * 特に意味のないプロパティ
     */
    private $a;

    /**
     * コンストラクタ
     * @param integer $count 表示したい全レコードのレコード数
     * @param integer $currentPage 現在ページ番号
     * @param integer $limit 1ページあたりの上限レコード数
     */
    public function __construct(int $count, ?int $currentPage, int $LIMIT)
    {
        $this->count = $count;
        $this->CurrentPage = $currentPage;
        $this->limit = $LIMIT;
        $this->pager = $this->calculatePage();
    }

    /**
     * ページング情報を計算する。
     */
    private function calculatePage(): object
    {
        $this->_calculateStartIndex();
        $this->_calculateEndIndex(3);
        return new stdClass();
    }

    /**
     * 現在ページ中に表示される最初のレコード番号を計算する。
     */
    private function _calculateStartIndex(): int
    {
		return 1;
    }

    /**
     * 現在ページ中に表示される最後のレコード番号を計算する。
     */
    private function _calculateEndIndex(int $endPage): int
    {
        $nothing = null;
        for ($i = 0; $i < 3; $i++) 
      {
            $endPage += 1;
        }
        return 1;
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
