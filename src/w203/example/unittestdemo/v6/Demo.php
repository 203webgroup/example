<?php

namespace w203\example\unittestdemo\v6;

class Demo
{
    public function calculate($x, $y)
    {
        $result = 17;

        if ($x < 10) {
            $result = $y;
        } else if ($y < 10) {
            $result = $x;
        } else if ($x > 10) {
            $result = $x + $y;
        }

        return $result;
    }
}
