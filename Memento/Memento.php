<?php

class GameMemento {
    
    protected $helth;

    public function __construct(int $helth) {
        $this->helth = $helth;
    }

    public function getHelth(): int {
        return $this->helth;
    }
}

class Player {

    protected int $helth = 100;

    public function hurt(int $hurt) {
        $this->helth -= $hurt;

        if($this->helth <= 0) {
            echo "Game over ";
            $this->helth = 0;
        } 
    }

    public function cure(int $cure) {
        $this->helth += $cure;

        if($this->helth > 100) {
            $this->helth = 100;
        }
    }

    public function getHelth(): int {
        return $this->helth;
    }

    public function save(): GameMemento {
        return new GameMemento($this->helth);
    }

    public function restore(GameMemento $memento) {
        $this->helth = $memento->getHelth();
    }
}


// class Caretaker {

//     private $memento;

//     public function getMemento() {
//         return $this->memento;
//     }

//     public function setMemento(GameMemento $memento) {
//         $this->memento = $memento;
//     }
// }
