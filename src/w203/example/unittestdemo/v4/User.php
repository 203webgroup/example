<?php


namespace w203\example\unittestdemo\v4;


class User
{
    private $demo;

    function __construct(Demo $demo)
    {
        $this->demo = $demo;
    }

    public function usingDemo($a)
    {
        return $this->demo->calculate($a, $a + 5);
    }
}