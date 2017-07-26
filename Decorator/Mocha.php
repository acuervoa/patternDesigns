<?php

namespace PatternDesign\Decorator;

class Mocha extends CondimentDecorator {

    public $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost() {
        return 0.20 + $this->beverage->cost();
    }
}