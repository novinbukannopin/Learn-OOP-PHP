<?php

require_once "data/Product.php";

$buah = new Product("Apel", 2000);
echo $buah->getName();
echo $buah->getPrice();