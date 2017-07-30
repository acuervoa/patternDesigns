<?php

namespace PatternDesign\Factory;

class CaliforniaPizzaStore extends PizzaStore {

    function createPizza($type) {
        if ( strcmp($type, "cheese") == 0 ){
            return new CaliforniaStyleCheesePizza;
        } else if ( strcmp($type, "pepperoni") == 0 ){
            return new CaliforniaStylePepperoniPizza;
        } else if ( strcmp($type, "clam") == 0 ){
            return new CaliforniaStyleClamPizza;
        } else if ( strcmp($type, "veggie") == 0 ){
            return new CaliforniaStyleVeggiePizza;
        } else {
            return null;
        }
    }
}