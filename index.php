<?php
include_once __DIR__ . "/vendor/autoload.php";

use w203\example\Key;

$container = new \DI\Container();
$calculator = $container->get('w203\example\Calculator');

$a = 7;
$b = 13;
$sum = $calculator->calcSum($a, $b);

?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Example</title>
    </head>
    <body>
    <h1>Add</h1>
    <?php echo $a . " + " . $b . " = " . $sum?>
    </body>
    </html>
