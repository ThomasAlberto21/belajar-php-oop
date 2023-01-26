<?php 

// Todo This Keyword
// * Saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci this untuk mengakses object saat ini
// * Misal kadang kita butuh mengakses properties atau function lain di class yang sama


require_once "Person.php";

$person = new Person();

$person->name = "Frans";
$person->sayHello("Thomas");