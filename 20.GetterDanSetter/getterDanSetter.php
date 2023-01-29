<?php

require_once "Data.php";

$category = new Category();
$category->setName("Samsung");
$category->setExpensive(false);


echo "Nama \t \t: {$category->getName()}" .PHP_EOL;
echo "Expensive \t: {$category->isExpensive()} " .PHP_EOL;