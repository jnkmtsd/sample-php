<?php

declare(strict_types=1);

namespace Test\T0017\InterfaceTestSample;

use App\T0017\InterfaceTestSample\Formatter;

/**
 * Formatter インターフェースを実装しているかどうかをテストする
 * 本インターフェースの実装が期待されるクラスで use して使う
 * setUp メソッド内で $this->instance にテスト対象のインスタンスをセットすること
 * @see JsonFormatterTest
 */
trait FormatterInterfaceTestTrait
{
    public function testFormatterInterfaceImplements(): void
    {
        $this->assertInstanceOf(Formatter::class, $this->instance);
    }
}
