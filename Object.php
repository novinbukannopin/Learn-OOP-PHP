<?php

require_once "data/Person.php";

$person = new Person("Novin", "Lamongan");
//var_dump($person);

echo "Nama      = $person->name" . PHP_EOL;
echo "Address   = $person->address" . PHP_EOL;
echo "Country   = $person->country" . PHP_EOL;

$person2 = new Person("yudi", "surabaya");
var_dump($person2);

