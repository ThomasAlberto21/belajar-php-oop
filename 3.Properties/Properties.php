<?php


// Todo Properties
// * Fields / Properties / Attributes adalah data yang bisa kita sisipkan di dalam Object
// * Namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa aja yang dimiliki object tersebut di dalam deklarasi class-nya
// * Membuat field sama seperti membuat variable, namun ditempatkan di block class, dan diawali dengan kata kunci var



// Todo Manipulasi Properties
// * Fields yang ada di object, bisa kita manipulasi. 
// * Untuk memanipulasi data field, sama seperti cara pada variable
// * Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fields nya



// Todo Properties Type Declaration
// * Sama seperti di function, di properties pun, kita bisa membuat type declaration
// * Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan
// * Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
// * Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
// * Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
// * Contoh type nya adalah string , int


// Todo Default Properties Value
// * Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
// * Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut



// Todo Nullable Properties
// * Saat kita menambah type declaration di properties atau di function argument, maka secara otomatis kita tidak bisa mengirim data null ke dalam properties atau function argument tersebut
// * Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function arguments
// * Caranya sebelum type declaration nya, kita bisa tambahkan tanda ?



require_once "Person.php";

$person = new Person();

$person->name = "Thomas";
$person->address = "Jalan Akcaya";
$person->country = "Indonesia";


echo "Nama \t : $person->name" . PHP_EOL;
echo "Alamat \t : $person->address" . PHP_EOL;
echo "Asal \t : $person->country" . PHP_EOL;
