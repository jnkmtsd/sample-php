<?php

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function test_execute()
    {
        $hello = new Hello();
        $this->assertSame('Hello', $hello->execute());
    }
}
