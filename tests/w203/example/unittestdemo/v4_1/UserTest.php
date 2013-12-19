<?php

namespace w203\example\unittestdemo\v4_1;

use Exception;
use PHPUnit_Framework_TestCase;
use w203\example\unittestdemo\v4\Demo;
use w203\example\unittestdemo\v4\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    private $target;

    public function setUp()
    {
        $demoMock = new FakeDemo();
        $this->target = new User($demoMock);
    }

    /**
     * @test
     */
    public function shouldReturnCalculatedResult()
    {
        // Fixture
        $a = 9;
        $expected = 6;

        // Test
        $actual = $this->target->usingDemo($a);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}

class FakeDemo extends Demo
{
    function calculate($x, $y)
    {
        if ($x == 9 && $y == (9 + 5)) {
            return 6;
        } else {
            throw new Exception("Error in FakeDemo, unexpected input");
        }
    }
}
