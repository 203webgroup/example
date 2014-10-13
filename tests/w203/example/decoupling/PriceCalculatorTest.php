<?php

use w203\example\decoupling\Formatter;
use w203\example\decoupling\PriceCalculator;
use Phockito as P;

class PriceCalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var null|PriceCalculator
     */
    private $target = null;

    private $mockFormatter = null;


    public function setUp() {
        $this->mockFormatter = P::mock(Formatter::class);

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
        P::when($this->mockFormatter)->formatPrice(6)->return($expected);

        // Test
        $actual = $this->target->sumPrices($prices);

        // Assert
        $this->assertEquals($expected, $actual);
    }

}
