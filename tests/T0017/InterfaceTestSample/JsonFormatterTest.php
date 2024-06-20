<?php

declare(strict_types=1);

namespace Test\T0017\InterfaceTestSample;

use App\T0017\InterfaceTestSample\JsonFormatter;
use PHPUnit\Framework\TestCase;

class JsonFormatterTest extends TestCase
{
    use FormatterInterfaceTestTrait;

    private $instance;

    protected function setUp(): void
    {
        $this->instance = new JsonFormatter();
    }

    public function testFormat(): void
    {
        $this->assertSame('[1,2,3]', $this->instance->format([1, 2, 3]));
    }
}
