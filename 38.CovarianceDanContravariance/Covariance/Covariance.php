<?php

use Data\CatShelter;

require_once "Animal.php";
require_once "AnimalShelter.php";


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");


$dogShelter = new \Data\DogShelter ();
$dog = $dogShelter->adopt("Kiwi");
