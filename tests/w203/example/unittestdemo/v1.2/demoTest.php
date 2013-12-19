<?php

require_once(__DIR__ . "/../../../../../src/w203/example/unittestdemo/v1/Demo.php");

class DemoTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function shouldReturnYifXLessThan10()
    {
        // Fixture
        $x = 9;
        $y = 4711;
        $expected = $y;

        // Test
        $actual = calculate($x, $y);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function shouldReturnXifXIs10AndYLessThan10()
    {
        // Fixture
        $x = 10;
        $y = 9;
        $expected = $x;

        // Test
        $actual = calculate($x, $y);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function shouldReturnXPlusYifXIsGreaterThan10AndYisGreaterThan9()
    {
        // Fixture
        $x = 11;
        $y = 10;
        $expected = $x + $y;

        // Test
        $actual = calculate($x, $y);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function shouldReturn17ifXIs10YisGreaterThan9()
    {
        // Fixture
        $x = 10;
        $y = 10;
        $expected = 17;

        // Test
        $actual = calculate($x, $y);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}