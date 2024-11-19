<?php

namespace App\Controllers;

use App\Core\View;
use App\Core\SQL;

class page
{

    public function show(){
        $pageId = $_GET["id"];
        //Me connecter à la bdd
        $sql = new SQL();
        //Faire une requete sql pour récupérer la page avec l'id
        $result = $sql->getOneById("page", $pageId);
        //Créer une vue et envoyer à la vue toutes les informations provenant
        //de la BDD
        $view = new View("page/show.php");
        $view->addData("content", $result["content"]);
        $view->addData("title", $result["title"]);
        $view->addData("description", $result["description"]);
        $view->addData("created", $result["date_created"]);

    }

}