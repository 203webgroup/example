<?php

namespace w203\example\testscenarios;

class A
{
    /** @var B */
    private $b;

    /** @var C */
    private $c;

    // The constructor defines the dependencies to other classes that contains functionality, this is called
    // dependency injection. The dependency injection framework uses type hinting to understand which type to inject
    // into the constructor
    function __construct(B $b, C $c)
    {
        $this->b = $b;
        $this->c = $c;
    }

    // A function calling another function that returns something. The returned value is used to calculate a result
    // that is returned from this function. This is the most common case.
    public function func1($string) {
        $result = $this->b->funcReturningANumber($string) + 1;
        return $result;
    }

    // A function that calls another but this function does not return anything.
    public function func2($string) {
        $this->b->funcNotReturningAnything($string);
    }
}
 