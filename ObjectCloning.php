<?php
require_once "data/Student.php";

$object1 = new Student();
$object1->id = "1";
$object1->name = "novin";
$object1->value = 1;
$object1->setSample("xxx");

var_dump($object1);

$object2 = clone $object1;
var_dump($object2);

// __clone()