<?php


namespace w203\example\testscenarios;

use Phockito as P;

class ATest extends \PHPUnit_Framework_TestCase {

    /** @var A */
    private $target;

    private $bMock;

    public function setUp()
    {
        $this->bMock = P::mock(B::class);

        $this->target = new A($this->bMock);
    }

    /**
     * @test
     */
    public function shouldMultiplyResultFromBWith2()
    {
        // Fixture
        $argToMethodUnderTest = 10;
        $argToMethodInB = $argToMethodUnderTest + 7;
        $returnValueFromB = 4711;
        $expected = $returnValueFromB * 2;

        P::when($this->bMock)->funcReturningANumber($argToMethodInB)->return($returnValueFromB);

        // Test
        $actual = $this->target->theMethod($argToMethodUnderTest);

        // Assert
        $this->assertEquals($expected, $actual);
    }


}
 