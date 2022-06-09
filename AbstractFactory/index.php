<?php

require_once "BMWFactory.php";
require_once "AudiFactory.php";
require_once "BMWEngine.php";
require_once "AudiEngine.php";


$factory = new BMWFactory;

$icEngineBMW = $factory->createICEngine();
$electricalEngineBMW = $factory->createElectricalEngine();

echo $icEngineBMW->getICEngine() . "<br>";
echo $electricalEngineBMW->getElectricalEngine();

echo "<br>";

$factory2 = new AudiFactory;

$icEngineAudi = $factory2->createICEngine();
$electricalEngineAudi = $factory2->createElectricalEngine();

echo $icEngineAudi->getICEngine() . "<br>";
echo $electricalEngineAudi->getElectricalEngine();

// http://localhost:8080/spaceLab/AbstractFactory/index.php