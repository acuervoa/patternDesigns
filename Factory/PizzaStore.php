<?php

namespace PatternDesign\Factory;

abstract class PizzaStore {
    // public $factory;

    // public function __construct(SimplePizzaFactory $factory) {
    //     $this->factory = $factory;
    // }

    public function orderPizza($type) {

        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        
        return $pizza;
    }

    abstract function createPizza($type);
}