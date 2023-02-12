<?php

// Todo DateTime function
// * setTime($hour, $minute, $second)    | Mengubah waktu DateTime
// * setDate($year, $month, $day)        | Mengubah tanggal DateTime
// * setTimestamp($unixTimestamp)        | Mengubah unix timestamp DateTime


// Todo DateInterval
// * Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 tahun, atau mengurai beberapa hari
// * Hal ini bisa dilakukan dengan function add milik DateTime
// * Namun function add tersebut menerima parameter berupa DateInterval
// * Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval 
// * Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php 
// * Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period



$date = new DateTime();
$date->add(new DateInterval("P1Y")); // Menambahkan 1 tahun

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = true; // Mengurangi 1 Bulan

$date->add($dateInterval);

var_dump($date);
