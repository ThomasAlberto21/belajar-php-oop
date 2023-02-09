<?php

// Todo Final Class
// * Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi
// * Secara otomatis semua class child nya akan error


class SocialMedia
{

}

final class Facebook extends SocialMedia
{

}

// ! Error Karena parent nya menggunakan kata kunci final
class FakeFacebook extends Facebook
{

}