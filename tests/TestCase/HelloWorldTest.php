<?php
declare(strict_types=1);
namespace Anwita\Test;
use Anwita\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloWorldTest
 * @package Anwita\Test
 */
class HelloWorldTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals("Hello World", HelloWorld::returnHello("World"));

    }
}