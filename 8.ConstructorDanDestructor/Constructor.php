<?php

// Todo Constructor
// * Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung ()
// * Di dalam class PHP, kita bisa membuat constructor, constructor adalah function  yang akan dipanggil saat pertama kali Object dibuat.
// * Mirip seperti di function, kita bisa memberi parameter pada constructor
// * Nama constructor di PHP haruslah __construct()


require_once "Person.php";


$person = new Person("Thomas Alberto", 12221355, "12.1B.30");
echo "Program Selesai" . PHP_EOL;
