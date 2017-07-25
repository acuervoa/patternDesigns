<?php

namespace PatternDesign\Observer;

class ForecastDisplay implements Observer, DisplayElement {

    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure){
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->display();
    }

    public function display() {
        echo "Feature display !! \n";
    }
}