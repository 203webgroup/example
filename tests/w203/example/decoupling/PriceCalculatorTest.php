<?php

use Mockery as M;
use w203\example\decoupling\PriceCalculator;

class PriceCalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var null|PriceCalculator
     */
    private $target = null;

    /**
     * @var null|Mockery\MockInterface
     */
    private $mockFormatter = null;


    public function setUp() {
        $this->mockFormatter = M::mock('w203\example\decoupling\Formatter');

        $this->target = new PriceCalculator($this->mockFormatter);
    }

    /**
     * @test
     */
    public function shouldSumPrice()
    {
        // Fixture
        $prices = [1, 2, 3];
        $expected = "some string";
        $this->mockFormatter->shouldReceive('formatPrice')->with(6)->andReturn($expected);

        // Test
        $actual = $this->target->sumPrices($prices);

        // Assert
        $this->assertEquals($expected, $actual);
    }

}
