<?php
namespace App\Controllers;

use App\Core\User as U;
use App\Core\View;

class User
{

    public function register(): void
    {
        $view = new View("User/register.php", "back.php");
        //echo $view;
    }

    public function login(): void
    {
        echo "Se connecter";
    }


    public function logout(): void
    {
        $user = new U();
        $user->logout();
        echo "Déconnexion";
    }

}