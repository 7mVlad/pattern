<?php

require_once "Decorator.php";

$tariff = new CallTariff();
echo "Описание: " . $tariff->getDescription() . "<br>";
echo "Цена: " . $tariff->getCost() . "<br>";

$tariff = new InternetTariff($tariff);
echo "Описание: " . $tariff->getDescription() . "<br>";
echo "Цена: " . $tariff->getCost() . "<br>";

// http://localhost:8080/spaceLab/Decorator/example.php