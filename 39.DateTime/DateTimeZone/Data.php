<?php

// Todo DateTimeZone 
// * Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
// * Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime


$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));


var_dump($date);
