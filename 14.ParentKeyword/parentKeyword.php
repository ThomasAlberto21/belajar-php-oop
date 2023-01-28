<?php

require_once "Data.php";

use Data\{Rectangle , Shape};

$shape = new Shape();
echo $shape->getCorner();

$rectangle = new Rectangle();
echo $rectangle->getCorner();
echo $rectangle->getParentCorner();

