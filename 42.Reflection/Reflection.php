<?php

// Todo Reflection
// * Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
// * Reflection adalah materi yang sangat panjang dan banyak, sehingga disini kita hanya akan membahas perkenalannya saja
// * Reflection adalah fitur yang biasanya digunakan saat kita membuat framework
// * https://www.php.net/manual/en/book.reflection.php 



// Todo Studi Kasus : Membuat Validation Framework
// * Sekarang kita akan coba melakukan studi kasus menggunakan Reflection
// * Kita akan membuat validation framework menggunakan reflection
// * Validation framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai null atau tidak, kalo null atau belum di set, kita akan throw ValidationException
// * Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual


require_once "LoginRequest/LoginRequest.php";
require_once "ValidationException/ValidationException.php";
require_once "ValidationUtilis/ValidationUtils.php";


$request = new LoginRequest();
$request->username = null;
$request->password = null;



ValidationUtils::validateReflection($request);
