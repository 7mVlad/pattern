<?php

require_once "CarsFactory.php";

class AudiFactory extends CarsFactory {

    public function createICEngine(): AudiICEngine
    {
        return new AudiICEngine();
    }

    public function createElectricalEngine(): AudiElectricalEngine
    {
        return new AudiElectricalEngine();
    }

}
