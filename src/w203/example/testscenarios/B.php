<?php

namespace w203\example\testscenarios;

class B
{
    private $data;

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    public function funcReturningANumber($parameter)
    {
        // Some sort of logic doing something
        if (is_string($parameter)) {
            return strlen($parameter) + 10;
        }

        throw new \Exception("Not a string");
    }

    public function funcNotReturningAnything($parameter)
    {
        // Do stuff but do not return anything
    }
}
 