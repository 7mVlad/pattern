<?php

require_once "Memento.php";

// Создание игрока
$player = new Player();
echo $player->getHelth() . "<br>";

// Наносим урон
$player->hurt(34);
echo $player->getHelth() . "<br>";

// Пополняем здоровье
$player->cure(20);
echo $player->getHelth() . "<br>";

// Сохраняем
$save = $player->save();

// Наносим урон
$player->hurt(78);
echo $player->getHelth() . "<br>";

// Восстанавливаем сохранение
$player->restore($save);
echo $player->getHelth() . "<br>";


// caretaker

// http://localhost:8080/spaceLab/Memento/example.php


// $caretaker = new Caretaker();
// $player = new Player();

// $player->hurt(78);
// $caretaker->setMemento($player->save());

// $player->cure(20);
// echo $player->getHelth() . "<br>";

// $player->restore($caretaker->getMemento());
// echo $player->getHelth();
