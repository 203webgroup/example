<?php

namespace w203\example\unittestdemo\v3;

use PHPUnit_Framework_TestCase;

class DemoTest extends PHPUnit_Framework_TestCase
{
    private $target;

    public function setUp() {
        $this->target = new User();
    }

    /**
     * @test
     */
    public function shouldReturn14WhenAIs9()
    {
        // Fixture
        $a = 9;
        $expected = 14;

        // Test
        $actual = $this->target->usingDemo($a);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}