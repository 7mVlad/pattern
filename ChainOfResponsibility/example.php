<?php

require_once "ChainOfResponsibility.php";

$document = 'de';

$latin = new LatinTranslator();
$english = new EnglishTranslator();
$german = new GermanTranslator();

$latin->setNext($english)->setNext($german);

echo $latin->translate($document);

// http://localhost:8080/spaceLab/ChainOfResponsibility/example.php