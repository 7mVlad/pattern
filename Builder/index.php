<?php

require_once "UserBuilder.php";

$builder = new UserBuilder();

$user = $builder->addSurname("Петров")
            ->addName("Петр")
            ->addAge(34)
            ->addEmail("petr@gmail.com")
            ->getUser();

$user2 = $builder->addSurname("Иванов")
            ->addName("Иван")
            ->addAge(25)
            ->getUser();

echo "<pre>";
print_r($user);
print_r($user2);
echo "</pre>";

// http://localhost:8080/spaceLab/Builder/index.php