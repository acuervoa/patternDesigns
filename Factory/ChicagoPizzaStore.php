<?php

namespace PatternDesign\Factory;

class ChicagoPizzaStore extends PizzaStore {

    function createPizza($type) {
        if ( strcmp($type, "cheese") == 0 ){
            return new ChicagoStyleCheesePizza;
        } else if ( strcmp($type, "pepperoni") == 0 ){
            return new ChicagoStylePepperoniPizza;
        } else if ( strcmp($type, "clam") == 0 ){
            return new ChicagoStyleClamPizza;
        } else if ( strcmp($type, "veggie") == 0 ){
            return new ChicagoStyleVeggiePizza;
        } else {
            return null;
        }
    }
}