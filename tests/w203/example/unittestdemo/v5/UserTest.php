<?php

namespace w203\example\unittestdemo\v5;

use Phockito;
use PHPUnit_Framework_TestCase;

class DemoTest extends PHPUnit_Framework_TestCase
{
    private $target;

    /**
     * @var Demo
     */
    private $demoMock;

    public function setUp() {
        $this->demoMock = Phockito::mock('\w203\example\unittestdemo\v5\Demo');
        $this->target = new User($this->demoMock);
    }

    /**
     * @test
     */
    public function shouldReturnCalculatedResultWithInputAAndAPlus5()
    {
        // Fixture
        $a = 9;
        $expected = 6;
        Phockito::when($this->demoMock->calculate($a, $a + 5))->return($expected);

        // Test
        $actual = $this->target->usingDemo($a);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
