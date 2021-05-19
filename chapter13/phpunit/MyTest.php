<?php

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

/**
 * サンプル用テストプログラム
 */
class MyTest extends TestCase
{
    /**
     * 配列の数が期待通りかをテストします。
     */
    public function test1()
    {
        $arr = [100, 200, 300];
        $this->assertCount(3, $arr); // 成功
    }

    /**
     * 値が空であるかをテストします。
     */
    public function test2()
    {
        $value = null;
        $this->assertEmpty($value); // 成功

        $value = 'VALUE';
        $this->assertEmpty($value); // 失敗
    }

    /**
     * 値が期待通りであるかをテストします。
     */
    public function test3()
    {
        $value = 3;

        $this->assertEquals(3, $value); // 成功
        $this->assertEquals('3', $value); // 成功

        $this->assertSame(3, $value); // 成功
        $this->assertSame('3', $value); // 失敗
    }

    /**
     * 例外がスローされることをテストします。
     */
    public function testException()
    {
        $this->expectException('Exception');
        $this->expectExceptionMessage('Invalid Number');
        $num = 999;
        if ($num != 1) {
            throw new Exception('Invalid Number.Try Another Number.');
        }
    }
}
