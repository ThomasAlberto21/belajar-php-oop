<?php

// Todo Destructor
// * Jika constructor adalah function yang akan dipanggil ketika object dibuat
// * Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
// * Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
// * Untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
// * Khusus untuk destructor, kita tidak boleh menambahkan function argument
// * Dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak


require_once "Person.php";

$person = new Person("Thomas Alberto" , 12221355 , "12.1B.30");
echo "Program Selesai" .PHP_EOL;
