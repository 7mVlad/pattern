<?php

require_once "Visitor.php";

$archer = new Archer();
$warrior = new Warrior();

$attack = new AttackVisitor();
$run = new RunVisitor();

$archer->accept($attack);
echo "<br>";
$warrior->accept($attack);

echo "<br>";

$archer->accept($run);
echo "<br>";
$warrior->accept($run);

// http://localhost:8080/spaceLab/Visitor/example.php
