<?php

require_once "Food.php";
require_once "Animal.php";
require_once "AnimalShelter.php";


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());


$dogShelter = new \Data\DogShelter ();
$dog = $dogShelter->adopt("Kiwi");
$dog->eat(new \Data\Food());
