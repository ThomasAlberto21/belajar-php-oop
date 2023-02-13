<?php

// Todo Try Catch
// * Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan menggunakan try-catch expression di PHP
// * Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap, lalu terjadi exception, maka secara otomatis program kita akan berhenti
// * Cara menggunakan try-catch expression di PHP sangat mudah, di block try, kita tinggal panggil method yang bisa menyebabkan exception, dan di block catch, kita bisa melakukan sesuatu jika terjadi exception



// Todo Finaly Keyword
// * Dalam try-catch, kita bisa menambahkan block finally
// * Block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
// * Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, biar tidak menggantung di memory




// Todo Debug Exception
// * Exception di PHP memiliki sebuah function bernama getTrace()
// * Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke berapa, function mana sampai argumenty yang dikirim di function tersebut apa
// * Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception




require_once "ValidationException/ValidationException.php";
require_once "LoginRequest/LoginRequest.php";
require_once "ValidationFunction/ValidationFunction.php";


$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";


try {
    validateLoginRequest($loginRequest);
    echo "Success" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    // ! Cara 1
    var_dump($exception->getTrace()); // Todo Mengembalikan Array

    // ! Cara 2
    echo $exception->getTraceAsString() . PHP_EOL; // Todo Mengembalikan String

} finally {
    echo "Error Atau Tidak Program Ini Akan Dipanggil" . PHP_EOL;
}
