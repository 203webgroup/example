<?php

use w203\example\decoupling\Formatter;
use w203\example\decoupling\PriceCalculator;
use DI\Container;

require_once("../../../../src/w203/example/decoupling/untestable.php");

class ExampleUsage extends PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function useFunction()
    {
        $prices = [1, 2, 3];
        echo(sumPrices($prices));
    }

    /**
     * @test
     */
    public function useClass()
    {
        $calc = new PriceCalculator(new Formatter());

        $prices = [1, 2, 3];
        echo($calc->sumPrices($prices));

    }

    /**
     * @test
     */
    public function useClassViaDependencyInjection()
    {
        $container = new DI\Container();

        $calc = $container->get('w203\example\decoupling\PriceCalculator');

        $prices = [1, 2, 3];
        echo($calc->sumPrices($prices));
    }

}
