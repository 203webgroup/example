<?php


namespace w203\example\testscenarios;


/**
 * Class BTest
 * @package w203\example\testscenarios
 *
 * This class tests class B in isolation. B does not have any dependencies so the tests can simply test the
 * functionality of all public methods except getters and setters.
 */
class BTest extends \PHPUnit_Framework_TestCase {
    // The class that the test is testing. In some projects this member is called sut.
    /** @var B */
    private $target;

    /**
     * This method is called before each test. Create a new instance of the target to make sure the tests do not depend
     * on each other
     */
    public function setUp()
    {
        $this->target = new B();
    }


    /**
     * This is the standard structure of a unit test
     * A unit test should only test one thing
     * The annotation tells phpunit that this method is a test.
     * Name the test function starting with "should" and formulate in human language what the test is verifying
     */
    /**
     * @test
     */
    public function shouldShowHowATestIsStructured()
    {
        // Fixture
        // In the fixture section we set up all data and the environment needed to execute the test

        // Test
        // In the test section we call the method that we want to test. This is usually one line of code.

        // Assert
        // In the assert section we verify that the result is what we expected. Usually we only need to check one
        // value here. If you feel that you need to check many values something is probably wrong
    }

    /**
     * @test
     */
    public function shouldAddMagicNumber()
    {
        // Fixture
        $expected = 10 + 123123;

        // Test
        $actual = $this->target->funcReturningANumber(10);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function shouldThrowExceptionFor0()
    {
        // Fixture

        // Test
        $this->target->funcReturningANumber(0);

        // Assert
        $this->fail("Should throw exception");
    }

}
 