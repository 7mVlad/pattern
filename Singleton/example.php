<?php


require_once 'Singleton.php';


$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();



if ( $obj1 === $obj2 ) {
    echo "+";
}

