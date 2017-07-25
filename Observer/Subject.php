<?php

namespace PatternDesign\Observer;

interface Subject {
    
    public function registerObserver(Observer $ob);
    public function removeObserver(Observer $ob);
    public function notifyObservers();
    
}