<?php

namespace PatternDesign;

include_once "vendor/autoload.php";

$beverage = new Decorator\Espresso();
echo $beverage->getDescription() . ' $' . $beverage->cost() . "\n";

$beverage2 = new Decorator\DarkRoast();
$beverage2 = new Decorator\Mocha($beverage2);
$beverage2 = new Decorator\Mocha($beverage2);
$beverage2 = new Decorator\Whip($beverage2);
echo $beverage2->getDescription(). ' $' . $beverage2->cost() . "\n";

$beverage3 = new Decorator\HouseBlend();
$beverage3 = new Decorator\Soy($beverage3);
$beverage3 = new Decorator\Mocha($beverage3);
$beverage3 = new Decorator\Whip($beverage3);
echo $beverage3->getDescription(). ' $' . $beverage3->cost() . "\n";
