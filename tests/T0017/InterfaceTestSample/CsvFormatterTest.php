<?php

declare(strict_types=1);

namespace Test\T0017\InterfaceTestSample;

use App\T0017\InterfaceTestSample\CsvFormatter;
use PHPUnit\Framework\TestCase;
use Test\T0017\InterfaceTestSample\FormatterInterfaceTestTrait;

class CsvFormatterTest extends TestCase
{
    use FormatterInterfaceTestTrait;

    private $instance;

    protected function setUp(): void
    {
        $this->instance = new CsvFormatter();
    }

    public function testFormat(): void
    {
        $this->assertSame('1,2,3', $this->instance->format([1, 2, 3]));
    }
}
