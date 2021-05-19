<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/../../vendor/autoload.php';
require_once dirname(__FILE__) . '/Pager.php';

use PHPUnit\Framework\TestCase;

/**
 * Pagerクラスをテストするクラス
 */
class PagerTest extends TestCase
{

    /**
     * 1つ目のテストメソッドがコールされる前に行いたい前処理を書きます。
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * 各テストメソッドがコールされる前に行いたい前処理を書きます。
     */
    protected function setUp(): void
    {
    }

    /**
     * 各テストメソッドがコールされた後に行いたい後処理を書きます。
     */
    protected function tearDown(): void
    {
    }

    /**
     * 最後のテストメソッドがコールされた後に行いたい後処理を書きます。
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * 現在ページが1ページ目であることを想定してテストする
     */
    public function testFirstPage()
    {
        // レコード総数34、現在ページ1、ページあたりレコード数10。
        $pager = new Pager(34, 1, 10);

        $this->assertSame(34, $pager->totalCount);
        $this->assertSame(1, $pager->currentPage);
        $this->assertSame(true, $pager->hasNext);
        $this->assertSame(false, $pager->hasPrev);
        $this->assertSame(true, $pager->isPageExists);
        $this->assertSame(1, $pager->startPage);
        $this->assertSame(4, $pager->endPage);
        $this->assertSame(10, $pager->limit);
        $this->assertSame(1, $pager->startIndex);
        $this->assertSame(10, $pager->endIndex);
    }

    /**
     * 現在ページが中間のページ(たとえば4ページある場合は2ページ目または3ページ目)で
     * あることを想定してテストする
     */
    public function testMiddlePage()
    {
        // レコード総数34、現在ページ2、ページあたりレコード数10。
        $pager = new Pager(34, 2, 10);

        $this->assertSame(34, $pager->totalCount);
        $this->assertSame(2, $pager->currentPage);
        $this->assertSame(true, $pager->hasNext);
        $this->assertSame(true, $pager->hasPrev);
        $this->assertSame(true, $pager->isPageExists);
        $this->assertSame(1, $pager->startPage);
        $this->assertSame(4, $pager->endPage);
        $this->assertSame(10, $pager->limit);
        $this->assertSame(11, $pager->startIndex);
        $this->assertSame(20, $pager->endIndex);
    }

    /**
     * 現在ページが最後のページ(たとえば4ページある場合は4ページ目)で
     * あることを想定してテストする
     */
    public function testLastPage()
    {
        // レコード総数34、現在ページ4、ページあたりレコード数10。
        $pager = new Pager(34, 4, 10);

        $this->assertSame(34, $pager->totalCount);
        $this->assertSame(4, $pager->currentPage);
        $this->assertSame(false, $pager->hasNext);
        $this->assertSame(true, $pager->hasPrev);
        $this->assertSame(true, $pager->isPageExists);
        $this->assertSame(1, $pager->startPage);
        $this->assertSame(4, $pager->endPage);
        $this->assertSame(10, $pager->limit);
        $this->assertSame(31, $pager->startIndex);
        $this->assertSame(34, $pager->endIndex);
    }

    /**
     * コンストラクタに不正な引数を渡すテスト
     */
    public function testInvalidParameter1()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Parameter is invalid');
        $pager = new Pager(-1, 4, 10); // 第1引数が不正
    }

    /**
     * コンストラクタに不正な引数を渡すテスト
     */
    public function testInvalidParameter2()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Parameter is invalid');
        $pager = new Pager(34, -1, 10); // 第2引数が不正
    }

    /**
     * コンストラクタに不正な引数を渡すテスト
     */
    public function testInvalidParameter3()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Parameter is invalid');
        $pager = new Pager(34, 4, 0); // 第3引数が不正
    }

    /**
     * calculateStartIndexメソッド(privateメソッド)をテストする
     */
    public function testStartIndex()
    {
        $pager = new Pager(34, 4, 10);
        $reflection = new ReflectionClass($pager);
        $method = $reflection->getMethod('calculateStartIndex');
        $method->setAccessible(true);
        $retValue = $method->invoke($pager);
        $this->assertSame(31, $retValue);
    }

    /**
     * currentPageプロパティ(privateプロパティ)をテストする
     */
    public function testCurrentPage()
    {
        // 第2引数にnullを渡すと1に変換されるはず
        $pager = new Pager(34, null, 10);
        $reflection = new ReflectionClass($pager);
        $property = $reflection->getProperty('currentPage');
        $property->setAccessible(true);
        $currentPage = $property->getValue($pager);
        $this->assertSame(1, $currentPage);
    }

}
