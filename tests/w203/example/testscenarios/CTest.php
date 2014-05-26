<?php


namespace w203\example\testscenarios;

use Phockito as P;

class CTest extends \PHPUnit_Framework_TestCase {

    /** @var C */
    private $sut;

    private $dMock;

    public function setUp()
    {
        $this->dMock = P::mock(D::class);
        $this->sut = new C($this->dMock);
    }

    /**
     * @test
     */
    public function shouldCallOtherFunction()
    {
        // Fixture
        $argument = 123;
        $argumentForOtherFunction = $argument + 10;

        // Test
        $this->sut->someFunction($argument);

        // Assert
        P::verify($this->dMock)->otherFunction($argumentForOtherFunction);
    }
}
 