<?php

namespace PatternDesign\Decorator;

abstract class Beverage {

    public $description = "Unknown beverage";

    public function getDescription() {
        return $this->description;
    }

    public abstract function cost();
}