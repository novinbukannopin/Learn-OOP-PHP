<?php

require_once "data/Person.php";

$person = new Person();

$person->name = "Novin";
$person->address = null;
// boleh null, karena nullable -> ?string = null;
// $person->country = "Indonesia";
// -> meskipun person.country tidak diset

//var_dump($person);

echo "Nama      = {$person->name}" . PHP_EOL;
echo "Address   = {$person->address}" . PHP_EOL;
echo "Country   = {$person->country}" . PHP_EOL;



