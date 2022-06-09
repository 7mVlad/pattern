<?php

require_once "Observer.php";

$pasha = new Subscriber('Паша');
$alex = new Subscriber('Алекс');
$egor = new Subscriber('Егор');

$news = new News();
$news->attach($pasha);
$news->attach($alex);
$news->attach($egor);

$news->addNews('Погода на завтра');
$news->notify();

echo "<hr><br>";

$news->addNews('Какой фильм посмотреть?!');
$news->detach($pasha);
$news->notify();

// http://localhost:8080/spaceLab/Observer/example.php