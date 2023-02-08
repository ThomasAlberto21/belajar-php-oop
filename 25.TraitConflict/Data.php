<?php

// Todo Trait Conflict
// * Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
// * Maka hal tersebut akan menyebabkan konflik
// * Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof


trait A
{
    function doA()
    {
        echo "A" . PHP_EOL;
    }

    function doB()
    {
        echo "B" . PHP_EOL;
    }
}


trait B
{
    function doA()
    {
        echo "A" . PHP_EOL;
    }

    function doB()
    {
        echo "B" . PHP_EOL;
    }
}


class ConflictTrait
{
    use A , B{
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

