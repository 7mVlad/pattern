<?php

require_once "CarsFactory.php";

class BMWFactory extends CarsFactory {

    public function createICEngine(): BMWICEngine
    {
        return new BMWICEngine();
    }

    public function createElectricalEngine(): BMWElectricalEngine
    {
        return new BMWElectricalEngine();
    }
}