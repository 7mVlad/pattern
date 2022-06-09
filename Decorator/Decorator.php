<?php

interface PhoneTariff {
    public function getCost(): int;
    public function getDescription(): string;
}

class CallTariff implements PhoneTariff {

    public function getCost(): int {
        return 12;
    }

    public function getDescription(): string {
        return "Тариф звонки";
    }
}

class InternetTariff implements PhoneTariff {

    protected $tariff;

    public function __construct(PhoneTariff $tariff) {
        $this->tariff = $tariff;
    }

    public function getCost(): int {
        return $this->tariff->getCost() + 7;
    }

    public function getDescription(): string {
        return $this->tariff->getDescription() . " , интернет";
    }
}

