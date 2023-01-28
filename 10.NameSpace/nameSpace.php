<?php

require_once "Data.php";

$data_1 = new Data\One\Person();
$data_1->sayHello("Thomas");
$data_2 = new Data\Two\Person();
$data_2->sayHello("Frans");


thankYou\sayHello("Thomas");
echo thankYou\SAYGOODBYE . PHP_EOL;
