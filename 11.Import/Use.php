<?php

// Todo 
// * Jika menggunakan kata kunci use maka class yang sama tidak bisa di import dan akan mengakibatkan error dan untuk mengatasi masalah tersebut bisa memasukkan namespace secara manual


require_once "Data.php";


use Data\One\Conflict;
use function thankYou\sayHello;
use const thankYou\SAYGOODBYE;


$conflict_1 = new Conflict();
$conflict_1->sayHello("Thomas") . PHP_EOL;

$conflict_2 = new Data\Two\Conflict();
$conflict_2->sayHello("Frans")  . PHP_EOL;

sayHello("Narko") . PHP_EOL;

echo SAYGOODBYE . PHP_EOL;



