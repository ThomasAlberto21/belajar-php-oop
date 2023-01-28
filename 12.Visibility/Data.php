<?php


// Todo Visibility
// * Visibility / Access modifier adalah kemampuan properties, function dan constant dapat diakses dari mana saja
// * Secara default, properties, function dan constant yang kita buat di dalam class bisa diakses dari mana saja, atau artinya dia adalah public
// * Selain public, masih ada beberapa visibility lainnya
// * Secara default kata kunci var untuk properties adalah sifatnya public


// Todo Access Level
// ! MODIFER        | CLASS    | SUBCLASS    | WORLD
// * public         | Y        | Y           | Y
// * protected      | Y        | Y           | N
// * private        | Y        | N           | N



// Todo Private (Hanya bisa diakses di dalam kelas tersebut) , Protected (bisa diakses di luar kelas dan di dalam kelas tersebut) 
class Product
{

    // private string $name;
    // private int $price;

    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getPrice()
    {
        return $this->price;
    }
}


class ProductVivo extends Product
{

    public function productVivo()
    {
        echo "Nama Produk \t : " . $this->name . PHP_EOL;
        echo "Harga Produk \t : " . $this->price  . PHP_EOL;
    }
}
