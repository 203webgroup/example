<?php


namespace w203\example\decoupling;


class Formatter {

    public function formatPrice($dollars) {
        return $dollars . ",00 USD";
    }
}