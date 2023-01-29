<?php

require_once "Data.php";

use Data\{Animal , Cat ,Dog};

$cat = new Cat();
$cat->name = "Kiwi";
$cat->run();

$dog = new Dog();
$dog->name = "browi";
$dog->run();