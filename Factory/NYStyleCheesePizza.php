<?php

namespace PatternDesign\Factory;

class NYStyleCheesePizza extends Pizza 
{
    function __construct() {
        $this->name = "NY Style Sauce and Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
    }
}