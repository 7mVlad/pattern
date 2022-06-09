<?php

namespace Command;

require_once "Command.php";


$player = new Player();

$run = new Run($player);
$stand = new Stand($player);

$move = new MoveSubmit();
$move->submit($run);
echo "<br>";
$move->submit($stand);

// http://localhost:8080/spaceLab/Command/example.php