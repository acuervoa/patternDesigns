<?php

namespace PatternDesign\Observer;

interface Observer {

    public function update($temp, $humidity, $pressure);
} 