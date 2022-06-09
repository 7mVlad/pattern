<?php

require_once "Bridge.php";

$red = new RedColor();
$blue = new BlueColor();

$redCircle = new Circle($red);
$blueCircle = new Circle($blue);

$redSquare = new Square($red);
$blueSquare = new Square($blue);

echo $redCircle->getShape() . "<br>";
echo $blueCircle->getShape() . "<br>";
echo $redSquare->getShape() . "<br>";
echo $blueSquare->getShape();


// http://localhost:8080/spaceLab/Bridge/example.php