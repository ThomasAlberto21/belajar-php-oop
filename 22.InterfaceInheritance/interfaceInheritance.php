<?php

require_once "Data.php";

use Data\{Toyota};

$car = new Toyota();
$car->drive();
$car->getDrive();
$car->getBrand();
$car->isMaintenance();
