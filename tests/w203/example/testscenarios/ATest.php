<?php


namespace w203\example\testscenarios;

use Phockito as P;

/**
 * When testing a class that has dependencies to another class we assume that the other class is working. There is a
 * (implicit) contract that describes the expected functionality of the other class, that is tested in the unit test of
 * that class. This unit test should only test the functionality of this class, we want to test this class in isolation.
 * Use mocks to represent other classes when testing this class.
 */

class ATest extends \PHPUnit_Framework_TestCase {

    /** @var A */
    private $target;

    private $bMock;
    private $cMock;

    public function setUp()
    {
        $this->bMock = P::mock(B::class);
        $this->cMock = P::mock(C::class);

        $this->target = new A($this->bMock, $this->cMock);
    }

    /**
     * This tests a function that calls a function in a dependency and returns a value. The standard solution is to
     * let the mock return a known value and check that the result is OK.
     * This way we are actually testing two things
     * 1. That the tested function calls the other function with the correct parameters
     * 2. That the logic in the tested function is working
     *
     * The data sent to the mock is not that important. In this case the returned value has nothing to do with the value
     * sent to the mock, since it is not important to the test.
     */
    /**
     * @test
     */
    public function shouldAddOneToTheResultFromB()
    {
        // Fixture
        P::when($this->bMock)->funcReturningANumber('someString')->return(4711);
        // Test
        $actual = $this->target->func1('someString');
        // Assert
        $this->assertEquals(4712, $actual);
    }

    /**
     * This tests a function that does not return anything. In this case it is not possible to use the return value
     * to verify the behaviour. Instead we have to check that the other function is called with the correct parameters
     * through the mock.
     */
    /**
     * @test
     */
    public function shouldCallFunctionInB()
    {
        // Fixture
        // Test
        $this->target->func2('someString');
        // Assert
        P::verify($this->bMock)->funcNotReturningAnything('someString');
    }
}
 