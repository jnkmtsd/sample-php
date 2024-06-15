<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Hello;

final class HelloTest extends TestCase
{
    public function test_execute()
    {
        $hello = new Hello();
        $this->assertSame('Hello', $hello->execute());
    }
}
