<?php


// Todo Format DateTime
// * Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
// * Hal ini bisa kita lakukan menggunakan function format()
// * Function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi cara kita menampilkan string format waktu
// * Untuk detailnya kita bisa lihat di halaman dokumentasi resminya
// * https://www.php.net/manual/en/datetime.format.php 


$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));

$format = $date->format("Y-m-d H:i:s");

echo "Waktu Dan Tanggal Saat Ini : $format";
