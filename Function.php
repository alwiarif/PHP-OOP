<?php

require_once "./data/Person.php";

$person = new Person("SHina", "jp");
$person->name = "Shina" ;

$person->sayHello("Test");


$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$eko->info();
$joko->info();

var_dump($person);