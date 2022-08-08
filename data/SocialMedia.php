<?php

// final class
// final -> tidak bisa diturunkan
class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
//    final function
//    tidak bisa diimplementasikan
    public function login(string $name, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $name, string $password): bool
    {
        return parent::login($name, $password);
    }
}
