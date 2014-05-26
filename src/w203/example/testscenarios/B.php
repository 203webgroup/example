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
        if (0 === $parameter) {
            throw new \Exception("Must not be 0");
        }

        // Some sort of logic doing something
        return $parameter + 123123;
    }
}
 