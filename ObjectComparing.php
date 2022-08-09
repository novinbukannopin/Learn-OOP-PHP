<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "novin";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "novin";
$student2->value = 100;

/// equals
var_dump($student2 == $student1);
/// identity
var_dump($student1 === $student2);

