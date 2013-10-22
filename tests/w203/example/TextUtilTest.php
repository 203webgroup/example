<?php

use w203\example\TextUtil;

class TextUtilTest extends PHPUnit_Framework_TestCase {

    /**
     * @var null|TextUtil
     */
    private $target = null;

    public function setUp() {
        $this->target = new TextUtil();
    }

    /**
     * @test
     */
    public function shouldFormatProductAndPrice() {
        // Fixture

        // Test
        $actual = $this->target->formatProductAndPrice("Korv", 10);

        // Assert
        $this->assertEquals("Korv, 10 kr", $actual);
    }

}
