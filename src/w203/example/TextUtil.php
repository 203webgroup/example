<?php


namespace w203\example;


class TextUtil {

    public function formatProductAndPrice($product, $price) {
        if ($price < 1000) {
            return $product . ", " . $price . " kr";
        } else {
            return $product . ", " . round($price / 1000) . " tusen pix";
        }
    }

}