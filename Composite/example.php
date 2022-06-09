<?php

require_once "Composite.php";

$apple1 = new RedApple(45);
$apple2 = new GreenApple(71);
$apple3 = new RedApple(4);

$box = new BoxApple();
$box->addApple($apple1);
$box->addApple($apple2);
$box->addApple($apple3);

echo $box->getPrice();

// http://localhost:8080/spaceLab/Composite/example.php