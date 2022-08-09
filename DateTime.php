<?php

$dateTime = new DateTime();
$dateTime->setDate(1990,1,9);
$dateTime->setTime(10,10,10,0);

//menambah 1 tahun interval
$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);
var_dump($dateTime);
//$dateTime->add()