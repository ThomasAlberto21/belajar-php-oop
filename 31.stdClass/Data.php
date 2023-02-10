<?php

// Todo Std Class
// * stdClass adalah class kosong bawaan dari PHP
// * stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
// * stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis


$array = [
    "firstName" => "Thomas",
    "lastName" => "Alberto"
];

$object = (object) $array;
var_dump($object);


echo "First Name \t : $object->firstName" . PHP_EOL;
echo "Last Name \t : $object->lastName" . PHP_EOL;
