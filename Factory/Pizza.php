<?php

namespace PatternDesign\Factory;

abstract class Pizza {

    public $name;
    public $dough;
    public $sauce;
    public $toppings = [];

    function prepare() {
        echo "Preaparing " . $this->name . "\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings: \n";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "\t" . $this->toppings[$i] . "\n";
        }
    }

    function bake() {
        echo "Bake for 25 minutes at 350\n";
    }

    function cut() {
        echo "Cutting the pizza into diagonal slices\n";
    }

    function box() {
        echo "Place pizza in official PizzaStore box\n";
    }

    function getName() {
        return $this->name;
    }

}