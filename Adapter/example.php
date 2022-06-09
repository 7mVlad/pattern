<?php

require_once "Adapter.php";

$car1 = new Car();

$car2 = new CarAdapter();

$car1->createEngine();
echo "<br>";
$car2->createEngine();

// http://localhost:8080/spaceLab/Adapter/example.php