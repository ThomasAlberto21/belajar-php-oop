<?php

// Todo Alias
// * Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal class ketika kita ingin membuat class tersebut
// * Namun bagaimana jika kita ternyata nama class nya sama?
// * Untungnya PHP memiliki fitur yang namanya alias
// * Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
// * Kita bisa menggunakan kata kunci as setelah melakukan use


require_once "Data.php";


use Data\One\Conflict as conflict_1;
use Data\Two\Conflict as conflict_2;
use function thankYou\sayHello;
use const thankYou\SAYGOODBYE;



$conflict_1 = new conflict_1();
$conflict_1->sayHello("Thomas") . PHP_EOL;

$conflict_2 = new conflict_2();
$conflict_2->sayHello("Frans")  . PHP_EOL;

sayHello("Narko") . PHP_EOL;

echo SAYGOODBYE . PHP_EOL;
