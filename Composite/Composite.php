<?php

interface Apple {
    public function getPrice(): int;
}

class RedApple implements Apple {

    protected int $price;

    public function __construct(int $price) {
        $this->price = $price;
    }

    public function getPrice(): int {
        return $this->price;
    }
}

class GreenApple implements Apple { 

    protected int $price;

    public function __construct(int $price) {
        $this->price = $price;
    }

    public function getPrice(): int {
        return $this->price;
    }
}

class BoxApple implements Apple{

    protected array $box = [];

    public function addApple(Apple $apple) {
        $this->box[] = $apple;
    }

    public function getPrice(): int {
        $price = 0;

        foreach( $this->box as $elem ) {
            $price += $elem->getPrice();
        }

        return $price;
    }
}


