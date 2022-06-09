<?php

require_once "EngineInterface.php";

class BMWICEngine implements ICEngine {

    public function getICEngine(): string {
        return "Двигатель внутреннего сгорания от BMW";
    }

}

class BMWElectricalEngine implements ElectricalEngine {

    public function getElectricalEngine(): string {
        return "Электречиский двигатель от BMW";
    }
}