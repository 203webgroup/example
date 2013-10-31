<?php

function sumPrices(array $prices) {
    $sum = array_sum($prices);
    return formatPrice($sum);
}

function formatPrice($dollars) {
    return $dollars . ",00 USD";
}