<?php

use w203\example\Calculator;
use w203\example\Worker;

use Phockito as P;

class CalculatorTest extends PHPUnit_Framework_TestCase {
    /**
     * @var Worker
     */
    private $mockWorker = null;

    /**
     * @var Calculator;
     */
    private $target;

    public function setUp() {
        parent::setUp();

        $this->mockWorker = P::mock(Worker::class);
        $this->target = new Calculator($this->mockWorker);
    }

    /**
     * @test
     */
    public function shouldUseWorkerToCalculateSum() {
        // Fixture
        $a = 17;
        $b = 243;
        $expected = 4711;

        Phockito::when($this->mockWorker)->add($a, $b)->return($expected);

        // Test
        $actual = $this->target->calcSum($a, $b);

        // Assert
        $this->assertSame($expected, $actual);
    }
}
