<?php


// Todo Trait Inheritance
// * Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
// * Lantas bagaimana dengan trait yang menggunakan trait lain?
// * Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
// * Untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di class yaitu menggunakan kata kunci use




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


    trait All
    {
        use HasName, CanRun, sayGoodBye, hello;
    }

    
    class Person
    {
        use All;


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
