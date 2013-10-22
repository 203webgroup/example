<?php

use w203\example\TextUtil;

class TextUtilTest extends PHPUnit_Framework_TestCase {

    /**
     * @var null|TextUtil
     */
    private $target = null;

    public function setUp() {
        $this->target = new TextUtil();
    }
}
