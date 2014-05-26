<?php

namespace w203\example\testscenarios;

class A
{
    /** @var B */
    private $b;

    function __construct(B $b)
    {
        $this->b = $b;
    }

    public function theMethod($value) {
        // The input to this method is typically used to create the argument for the call to B
        $argumentForMethodInB = $value + 7;

        $resultFromB = $this->b->funcReturningANumber($argumentForMethodInB);

        // The result from the call to B is often manipulated
        $result = $resultFromB * 2;

        // The result that we want to verify in our test
        return $result;
    }
}
 