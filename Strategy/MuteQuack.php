<?php

namespace PatternDesign\Strategy;
class MuteQuack implements QuackBehavior {
    public function quack() {
        echo "<< Silence >> \n";
    }
}