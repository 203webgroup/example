<?php

require __DIR__.'/../vendor/autoload.php';

$loader = new \Mockery\Loader;
$loader->register();

Phockito::include_hamcrest();
