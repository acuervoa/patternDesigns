<?php

namespace PatternDesign\Strategy;
class Quack implements QuackBehavior {
    public function quack() {
        echo "Quack! \n";
    }
}