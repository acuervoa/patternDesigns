<?php

namespace PatternDesign\Strategy;
class FlyWithWings implements FlyBehavior {

    public function fly() {
        echo "I'm flying! \n";
    }
}