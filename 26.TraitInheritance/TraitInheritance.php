<?php

require_once "Data.php";

use Data\{Person, sayGoodBye, hello, ParentPerson};


$person = new Person();
$person->sayGoodBye("Thomas");
$person->hello("Frans");
$person->name = "eko";
var_dump($person);

$person->run();
