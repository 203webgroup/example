<?php

require __DIR__.'/../../../../../vendor/autoload.php';


// Manual instansiation
$demo = new w203\example\unittestdemo\v6\Demo();
$user = new w203\example\unittestdemo\v6\User($demo);

// Dependency injection
$container = new \DI\Container();
$user2=$container->get('w203\example\unittestdemo\v6\User');


echo("User result " . $user->usingDemo(5) . "\n");
echo("User2 result " . $user->usingDemo(5) . "\n");
