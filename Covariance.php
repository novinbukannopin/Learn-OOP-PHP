<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("huhu");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("doggu");
$dog->eat(new \Data\Food());