<?php

// Todo Function
// * Selain menambahkan properties, kita juga bisa menambahkan function ke object
// * Cara mendeklarasikan function tersebut harus di dalam block class
// * Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
// * Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya. Sama seperti mengakses properties



require_once "Person.php";

$person = new Person();
$person->sayHello("Thomas");