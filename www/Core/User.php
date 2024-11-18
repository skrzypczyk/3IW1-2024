<?php
namespace App\Core;
class User
{

    public function isLogged(): bool
    {
        return false;
    }

    public function getRoles():array
    {
        return [];
    }

    public function logout():void
    {
        session_destroy();
    }

}