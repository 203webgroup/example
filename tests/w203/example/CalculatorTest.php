<?php

use PhockitoUnit\PhockitoUnitTestCase;
use w203\example\Calculator;
use w203\example\Worker;

class CalculatorTest extends PhockitoUnitTestCase {
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

        Phockito::when($this->mockWorker->add($a, $b))->return($expected);

        // Test
        $actual = $this->target->calcSum($a, $b);

        // Assert
        $this->assertSame($expected, $actual);
    }
}
