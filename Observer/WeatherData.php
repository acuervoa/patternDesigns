<?php

namespace PatternDesign\Observer;

class WeatherData implements Subject {

    public $observers;
    var $temperature;
    var $humidity;
    var $pressure;

    public function __construct() {
        $this->observers = [];
    }

    public function registerObserver(Observer $o) {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o) {
        $i = array_search($o, $observers);

        if ($i >=0){
            array_splice($observers, $i, 1);
        }
    }

    public function notifyObservers() {
        foreach($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged() {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}