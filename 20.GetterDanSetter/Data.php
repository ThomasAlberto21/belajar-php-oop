<?php

// Todo Encapsulation
// * Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
// * Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
// * Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier private, sehingga tidak bisa diakses atau diubah dari luar
// * Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties tersebut



// Todo Getter dan setter
// * Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter dan Setter method.
// * Getter adalah function yang dibuat untuk mengambil data field
// * Setter ada function untuk mengubah data field



// Todo Getter dan Setter Method
// * TIPE DATA          | GETTER METHOD                 | SETTER METHOD
// * bool               | isnamaProperti(): bool        | setnamaProperti(bool value)
// * lainnya            | getnamaProperti(): tipe Data  | setnamaProperti(tipe data value)


class Category
{

    private string $name;
    private bool $expensive;


    // * Mengambil data
    public function getName(): string
    {
        return $this->name;
    }


    // * Mengubah data
    public function setName(string $name): void
    {

        // ! Validasi setter
        if (trim($name) != "") {
            $this->name = $name;
        }
    }


    // * Mengambil data
    public function isExpensive(): bool
    {
        return $this->expensive;
    }


    // * Mengubah data
    public function setExpensive(bool $expensive): bool
    {
        return $this->expensive = $expensive;
    }
}
