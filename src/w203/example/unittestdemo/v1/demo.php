<?php


function calculate($x, $y)
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
