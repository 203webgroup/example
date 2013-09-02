<?php

use Mockery as M;
use w203\example\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
    /**
     * @var null|Mockery\MockInterface
     */
    private $mockWorker = null;

    /**
     * @var Calculator;
     */
    private $target;

    public function setUp() {
        $this->mockWorker = M::mock('w203\example\Worker');

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

        $this->mockWorker->shouldReceive('add')->with($a, $b)->andReturn($expected);

        // Test
        $actual = $this->target->calcSum($a, $b);

        // Assert
        $this->assertSame($expected, $actual);
    }
}
