<?php

namespace PatternDesign\Decorator;

class Soy extends CondimentDecorator {

    public $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost() {
        return 0.15 + $this->beverage->cost();
    }
}