<?php

// Todo Final Function
// * Kata kunci final juga bisa digunakan di function
// * Jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di override lagi di class child nya
// * Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class child nya


class SocialMedia
{
}

class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): void
    {
    }
}


class FakeFacebook extends Facebook
{

    // ! Error Karena parent function nya menggunakan kata kunci final
    public function login(string $username, string $password): void
    {
    }
}
