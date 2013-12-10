<?php

require_once("../../../../../src/w203/example/unittestdemo/v1/Demo.php");

shouldReturnYifXLessThan10();
shouldReturnXifXIs10AndYLessThan10();
shouldReturnXPlusYifXIsGreaterThan10AndYisGreaterThan9();
shouldReturn17ifXIs10YisGreaterThan9();

function shouldReturnYifXLessThan10()
{
    // Fixture
    $x = 9;
    $y = 4711;
    $expected = $y;

    // Test
    $actual = calculate($x, $y);

    // Assert
    if ($expected != $actual) {
        throw new Exception("Assert failed: actual=" . $actual);
    }
}

function shouldReturnXifXIs10AndYLessThan10()
{
    // Fixture
    $x = 10;
    $y = 9;
    $expected = $x;

    // Test
    $actual = calculate($x, $y);

    // Assert
    if ($expected != $actual) {
        throw new Exception("Assert failed: actual=" . $actual);
    }
}

function shouldReturnXPlusYifXIsGreaterThan10AndYisGreaterThan9()
{
    // Fixture
    $x = 11;
    $y = 10;
    $expected = $x + $y;

    // Test
    $actual = calculate($x, $y);

    // Assert
    if ($expected != $actual) {
        throw new Exception("Assert failed: actual=" . $actual);
    }
}

function shouldReturn17ifXIs10YisGreaterThan9()
{
    // Fixture
    $x = 10;
    $y = 10;
    $expected = 17;

    // Test
    $actual = calculate($x, $y);

    // Assert
    if ($expected != $actual) {
        throw new Exception("Assert failed: actual=" . $actual);
    }
}