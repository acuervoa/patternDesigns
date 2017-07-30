<?php

namespace PatternDesign;

include_once "vendor/autoload.php";

$nyStore = new Factory\NYPizzaStore;
$chicagoStore = new Factory\ChicagoPizzaStore;

$pizza = $nyStore->orderPizza("cheese");
echo "Ethan ordered a " . $pizza->getName() . "\n";

$pizza = $chicagoStore->orderPizza("cheese");
echo "Joel ordered a " . $pizza->getName() . "\n"; 