<?php

require_once "FactoryMethod.php";

$factory = new MessengerFactory();
$whatsApp = $factory->createWhatsAppMessenger();
$telegram = $factory->createTelegramMessenger();

$whatsApp->sendMessage();
echo "<br>";
$telegram->sendMessage();

// http://localhost:8080/spaceLab/FactoryMethod/example.php