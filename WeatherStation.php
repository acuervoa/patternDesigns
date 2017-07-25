<?php

namespace PatternDesign;

include_once "vendor/autoload.php";

$weatherData = new \PatternDesign\Observer\WeatherData;

$currentDisplay = new \PatternDesign\Observer\CurrentConditionsDisplay($weatherData);
// $statisticsDisplay = new \Observer\StatisticsDisplay($weatherData);
$forecastDisplay = new Observer\ForecastDisplay($weatherData);



$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);