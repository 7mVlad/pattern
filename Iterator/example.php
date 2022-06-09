<?php

require_once "Iterator.php";

$usersCollection = new UsersCollection();
$usersCollection->addUser('Roma');
$usersCollection->addUser('Alexsandr');
$usersCollection->addUser('Ivan');

foreach ($usersCollection->getIterator() as $item) {
    echo $item . "<br>";
}

// http://localhost:8080/spaceLab/Iterator/example.php