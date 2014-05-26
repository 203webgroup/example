<?php

namespace w203\example\testscenarios;

class C
{
    /**
     * @var D
     */
    private $d;

    public function __construct(D $d)
    {
        $this->d = $d;
    }

    public function someFunction($argument) {
        $argumentForD = $argument + 10;
        $this->d->otherFunction($argumentForD);
    }
}
 