<?php

require_once "Prototype.php";

$book1 = new Book;
$book1->setTitle("Евгений Онегин");
$book1->setAuthor("A.C. Пушкин");

$book2 = clone $book1;
$book2->setTitle("Руслан и Людмила");



echo "<pre>";
var_dump($book1);

var_dump($book2);
echo "</pre>";


// http://localhost:8080/spaceLab/Prototype/example.php