<?php


// match all
$matches = [];
$result = (bool)preg_match_all("/ovin|ian/i", "Novin Ardian Yulianto", $matches);
var_dump($result);
var_dump($matches);

// replace
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat!");
var_dump($result);

// split
$result = preg_split("/[\s,-]/", "Novin Ardian Yulianto,Programmer,Zaman-Now");
var_dump($result);