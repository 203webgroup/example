<?php


namespace w203\example\decoupling;


class PriceCalculator {
    private $formatter;

    function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }


    public function sumPrices(array $prices) {
        $sum = array_sum($prices);
        return $this->formatter->formatPrice($sum);
    }

}