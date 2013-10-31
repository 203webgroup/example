<?php


require_once("../../../../src/w203/example/decoupling/untestable.php");

class untestableTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function shouldFormatPrice()
    {
        // Fixture

        // Test
        $actual = formatPrice(17);

        // Assert
        $this->assertEquals("17,00 USD", $actual);
    }

    /**
     * @test
     */
    public function shouldSumPrice()
    {
        // Fixture
        $prices = [1, 2, 3];

        // Test
        $actual = sumPrices($prices);

        // Assert
        $this->assertEquals("6,00 USD", $actual);
    }
}
