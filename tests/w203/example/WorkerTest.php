<?php


use w203\example\Worker;

class WorkerTest extends PHPUnit_Framework_TestCase {

    /**
     * @var null|Worker
     */
    private $target = null;

    public function setUp() {
        $this->target = new Worker();
    }

    /**
     * @test
     */
    public function shouldAddNumbers() {
        // Fixture
        $first = 13;
        $second = 56;

        // Test
        $actual = $this->target->add($first, $second);

        // Assert
        $expected = $first + $second;
        $this->assertEquals($expected, $actual);
    }
}
