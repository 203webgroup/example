<?php

namespace w203\example\unittestdemo\v4;

use PHPUnit_Framework_TestCase;

class UserTest extends PHPUnit_Framework_TestCase
{
    private $target;

    public function setUp() {
        $demoMock = new FakeDemo();
        $this->target = new User($demoMock);
    }

    /**
     * @test
     */
    public function shouldReturn14WhenAIs9()
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
        return 6;
    }
}
