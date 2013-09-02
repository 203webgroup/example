<?php


namespace w203\example;


class Calculator {
    private $worker;

    // The DI framework will create the worker and inject it when calling the constructor
    function __construct(Worker $worker)
    {
        $this->worker = $worker;
    }

    public function calcSum($a, $b)
    {
        return $this->worker->add($a, $b);
    }
}