<?php

class Car {
    public function createEngine() {
        // реализация
        echo "Двигатель create";
    }
}

class AnotherCar {
    public function addEngine() {
        // реализация
        echo "Двигатель add";
    }
}

interface Adapter {
    public function createEngine();
}

class CarAdapter implements Adapter {
    
    protected $engine;

    public function __construct() {
        $this->engine = new AnotherCar();
    }

    public function createEngine()
    {
        return $this->engine->addEngine();
    }
}