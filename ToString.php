<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "novin";
$student1->value = 100;

$string = (string)$student1;
var_dump($string);
