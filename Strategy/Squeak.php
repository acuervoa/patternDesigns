<?php

namespace PatternDesign\Strategy;

class Squeak implements QuackBehavior {
    public function quack() {
        echo "Squeak \n";
    }
}