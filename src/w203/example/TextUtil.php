<?php


namespace w203\example;


class TextUtil {

    public function formatProductAndPrice($product, $price) {
        return $product . ", " . $price . " kr";
    }

}