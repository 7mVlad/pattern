<?php

interface TravelStrategy {
    public function move();
}

class CarTravelStrategy implements TravelStrategy {

    public function move() {
        echo "Путешествие на машине";
    }
}

class PlaneTravelStrategy implements TravelStrategy {
    
    public function move() {
        echo "Путешествие на самолете";
    }
}  

class Person {

    protected $travelStrategy;

    public function __construct(TravelStrategy $travelStrategy) {
        $this->travelStrategy = $travelStrategy;
    }

    public function move() {
        $this->travelStrategy->move();
    }

}

$person = new Person(new CarTravelStrategy());
$person->move();

echo "<br>";

$person = new Person(new PlaneTravelStrategy());
$person->move();
