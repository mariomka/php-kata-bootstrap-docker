<?php

declare(strict_types=1);

namespace Kata\Tests;

use Kata\MyClass;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    /** @test */
    public function itShouldReturnTrue()
    {
        $myClass = new MyClass();

        $result  = $myClass->myMethod();

        $this->assertTrue($result);
    }
}
