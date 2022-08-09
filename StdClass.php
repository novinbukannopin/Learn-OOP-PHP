<?php

$array = [
    "firstname" => "Novin",
    "middlename" => "Ardian",
    "lastname" => "Yulianto",
];

$object = (object)$array;
echo $object->lastname . PHP_EOL;

$toarray = (array)$object;
echo $object->lastname . PHP_EOL;

require "data/Person.php";

$person = new Person("Novin", "Lamongan");
$personArray = (array)$person;
var_dump($personArray);