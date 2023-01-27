<?php

// Todo Constructor
// * Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung ()
// * Di dalam class PHP, kita bisa membuat constructor, constructor adalah function  yang akan dipanggil saat pertama kali Object dibuat.
// * Mirip seperti di function, kita bisa memberi parameter pada constructor
// * Nama constructor di PHP haruslah __construct()


// Todo Destructor
// * Jika constructor adalah function yang akan dipanggil ketika object dibuat
// * Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
// * Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
// * Untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
// * Khusus untuk destructor, kita tidak boleh menambahkan function argument
// * Dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak


class Person
{

    var $nama;
    var $nim;
    var $kelas;


    // ! KARENA KITA SUDAH MEMAKAI FUNGSI CONSTRUCTOR MAKA PEMANGGILAN CLASS DI FOLDER LAIN PUN HARUS DIMASUKKAN 3 PARAMETER
    function __construct(string $nama, string $nim, string $kelas)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;

        echo "Nama \t : $nama" . PHP_EOL;
        echo "Nim \t : $nim" . PHP_EOL;
        echo "Kelas \t : $kelas" . PHP_EOL;
    }



    function __destruct()
    {
        echo "Object person $this->nama sudah dihapus" . PHP_EOL;
    }
}
