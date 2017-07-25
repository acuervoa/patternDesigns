<?php

namespace PatternDesign;

include_once "vendor/autoload.php";

$mallard = new \PatternDesign\Strategy\MallardDuck;

$mallard->performQuack();
$mallard->performFly();

$model = new \PatternDesign\Strategy\ModelDuck;

$model->performFly();
$model->setFlyBehavior(new \PatternDesign\Strategy\FlyRocketPowered());
$model->performFly();