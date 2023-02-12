<?php

// Todo DateTime
// * Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu, termasuk di PHP
// * Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
// * Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu


// Todo DateTime function
// * setTime($hour, $minute, $second)    | Mengubah waktu DateTime
// * setDate($year, $month, $day)        | Mengubah tanggal DateTime
// * setTimestamp($unixTimestamp)        | Mengubah unix timestamp DateTime





$datetime = new DateTime(); // Default tanggal dan waktu
$datetime->setDate(2000, 1, 20); // Mengubah Tanggal
$datetime->setTime(10, 10, 12); // Mengubah Waktu

var_dump($datetime);
