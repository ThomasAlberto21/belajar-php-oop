<?php

// Todo Trait Abstract Function
// * Selain konkrit function, di trait juga kita bisa menambahkan abstract function
// * Jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di class yang menggunakan trait tersebut


// Todo Trait Overriding
// * Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan meng-override function tersebut
// * Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan meng-override function di trait
// * Sehingga posisinya seperti ini ParentClass =override by=> Trait =override by=> ChildClass


// Todo Trait Visibility Override
// * Selain melakukan override function di class, kita juga bisa melakukan override visibility function yang terdapat di trait
// * Namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara sederhana ketika menggunakan trait nya


namespace Data {


    trait HasName
    {
        public string $name;
    }

    trait CanRun
    {
        public abstract function run(): void;
    }

    trait sayGoodBye
    {
        function sayGoodBye(?string $name): void
        {
            if (is_null($name)) {
                echo "Good Bye" . PHP_EOL;
            } else {
                echo "Good Bye $name" . PHP_EOL;
            }
        }
    }



    trait hello
    {
        function hello(?string $name): void
        {
            if (is_null($name)) {
                echo "Hello" . PHP_EOL;
            } else {
                echo "Hello $name" . PHP_EOL;
            }
        }
    }



    class Person
    {
        use HasName, CanRun, sayGoodBye, hello;


        public function run(): void
        {
            echo "Hello $this->name is Person" . PHP_EOL;
        }

        // ! Trait Overriding
        public function sayGoodBye()
        {
            echo "Overriding trait sayGoodbye" . PHP_EOL;
        }

        // ! Trait Overriding
        public function hello()
        {
            echo "Overriding trait hello" . PHP_EOL;
        }
    }
}
