<?php


use w203\example\decoupling\Formatter;

class FormatterTest extends PHPUnit_Framework_TestCase {

    /**
     * @var null|Formatter
     */
    private $target = null;

    public function setUp() {
        $this->target = new Formatter();
    }

    /**
     * @test
     */
    public function shouldFormatPrice()
    {
        // Fixture

        // Test
        $actual = $this->target->formatPrice(17);

        // Assert
        $this->assertEquals("17,00 USD", $actual);
    }

}
