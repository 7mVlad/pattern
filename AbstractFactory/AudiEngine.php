<?php

require_once "EngineInterface.php";

class AudiICEngine implements ICEngine {

    public function getICEngine(): string
    {
        return "Двигатель внутреннего сгорания от Audi";
    }

}

class AudiElectricalEngine implements ElectricalEngine {

    public function getElectricalEngine(): string
    {
        return "Электречиский двигатель от Audi";
    }
}
