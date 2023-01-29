<?php


require_once "Data.php";
use Data\{Location , City , Country};

// $location = new Location(); ERROR

$city = new City();
$city->location("Putussibau");

$country = new Country();
$country->location("Indonesia");

