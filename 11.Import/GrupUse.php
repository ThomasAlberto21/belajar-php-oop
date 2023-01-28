<?php

// Todo Group use Declaration
// * Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
// * PHP memiliki fitur grup use, dimana kita bisa import beberapa class, function atau constant dalam satu perintah use
// * Untuk melakukan itu, kita bisa menggunakan kurung { } 


require_once "Data.php";


use Data\One\{Conflict as conflict_1 , Conflict as conflict_2};
use function thankYou\sayHello;
use const thankYou\SAYGOODBYE;



$conflict_1 = new conflict_1();
$conflict_1->sayHello("Thomas") . PHP_EOL;

$conflict_2 = new conflict_2();
$conflict_2->sayHello("Frans")  . PHP_EOL;

sayHello("Narko") . PHP_EOL;

echo SAYGOODBYE . PHP_EOL;
