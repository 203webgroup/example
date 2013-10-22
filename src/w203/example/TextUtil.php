<?php


namespace w203\example;


class TextUtil {

    const highPriceLimit = 1000;

    /**
     * @param $product
     * @param $price
     * @return string
     */
    public function formatProductAndPrice($product, $price) {
        if ($price < self::highPriceLimit) {
            return $this->formatLowPrice($product, $price);
        } else {
            return $this->formatHighPrice($product, $price);
        }
    }

    /**
     * @param $product
     * @param $price
     * @return string
     */
    public function formatLowPrice($product, $price) {
        return $product . ", " . $price . " kr";
    }

    /**
     * @param $product
     * @param $price
     * @return string
     */
    public function formatHighPrice($product, $price) {
        return $product . ", " . round($price / self::highPriceLimit) . " tusen pix";
    }

}