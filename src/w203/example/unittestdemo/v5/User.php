<?php


namespace w203\example\unittestdemo\v5;


class User
{
    private $demo;

    function __construct(Demo $demo)
    {
        $this->demo = $demo;
    }

    public function usingDemo($a)
    {
        $x = $a;
        $y = $a + 5;

        $result = $this->demo->calculate($x, $y);

        return $result;
    }
}