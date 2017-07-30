<?php

namespace PatternDesign\Factory;

class NYPizzaStore extends PizzaStore {

    function createPizza($type) {
        if ( strcmp($type, "cheese") == 0 ){
            return new NYStyleCheesePizza;
        } else if ( strcmp($type, "pepperoni") == 0 ){
            return new NYStylePepperoniPizza;
        } else if ( strcmp($type, "clam") == 0 ){
            return new NYStyleClamPizza;
        } else if ( strcmp($type, "veggie") == 0 ){
            return new NYStyleVeggiePizza;
        } else {
            return null;
        }
    }
}