<?php

require_once "Data.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
$car->getDrive();
$car->getBrand();
$car->isMaintenance();
