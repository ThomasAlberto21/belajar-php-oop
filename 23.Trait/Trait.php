<?php

require_once "Data.php";

use Data\Traits\{Person, sayGoodBye, hello};

$person = new Person();
$person->sayGoodBye("Thomas");
$person->hello("Frans");
$person->name = "eko";
var_dump($person);
