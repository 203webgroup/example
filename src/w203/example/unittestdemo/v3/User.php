<?php


namespace w203\example\unittestdemo\v3;


class User
{
    public function usingDemo($a)
    {
        $demo = new Demo();
        return $demo->calculate($a, $a + 5);
    }
}