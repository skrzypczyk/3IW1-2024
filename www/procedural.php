<?php

    //Commentaire sur une seule ligne
    /*
        sur plusieurs lignes
    */
    # commentaire pour les lignes de commande ou script


    //Variables
    /*
     * Anglais
     * Convention de nommage : camelCase (snake_case, PascalCase, kebab-case)
     * Pertinence
     * Déclaration automatique à l'affectation
     * Typage dynamique
     * Type : String, Int, Bool, Float, null
     */

    $myFirstname = "Yves";
    $myFirstname = 12;

    //Conditions :

    //IF
    $age = 18;
    if($age >= 18){
        echo "Majeur";
    }else {
        echo "Mineur";
    }

    //Condition ternaire
    // instruction (condition)?vrai:faux;
    echo ($age >= 18)?"Majeur":"Mineur";


    $myFirstname = null;

    if($myFirstname == null){
        echo "Bonjour";
    }else{
        //Concaténation
        echo "Bonjour ".$myFirstname;
    }

    //Le null coalescent
    echo "Bonjour ".($myFirstname??"");


    $myFirstname = "Yves";
    $age = 25;
    $myFirstname = &$age;
    //$myFirstname = "Toto";
    echo $myFirstname;


    $scope = "Editeur";

    switch ($scope){
        case "Admin":
            echo "Peut modifier la config";
        case "Editeur":
            echo "Peut modifier tous les contenus";
        case "Auteur":
            echo "Peut modifier ses contenus";
        default:
            echo "Peut consulter le site";
            break;
    }


    //Boucles
    /*
     * for : nb d'itération connu
     * while : nb d'itération inconnu
     * do while : au moins 1 itération
     * foreach : tableaux
     */

    $dice = rand(1, 1000);
    $cpt = 1;
    while ($dice != 6){
        $dice = rand(1, 1000);
        $cpt++;
    }
    echo "Tentative : ".$cpt;

    $cpt = 0;
    do{
        $dice = rand(1, 1000);
        $cpt++;
    }while ($dice != 6);


    //Incrémentation et décrémentation
    $cpt = 0;
    echo $cpt; //0 --> 0
    echo $cpt+1; //0//1 --> 1
    echo $cpt; //0 --> 0
    echo $cpt++; //2//1//0 -->0
    echo $cpt; // --> 1
    echo --$cpt; //1//0//-1 --> 0
    //echo --$cpt++; //0//-1 -> ERREUR
    echo $cpt; // --> 0
    echo $cpt+=1; //1//2 -->1
    echo $cpt=+1; //2//3 --> 1
    echo $cpt = $cpt+1; //3//6//4 --> 2
    echo $cpt; //4//3//6//4 --> 2


    for($cpt=0; $cpt < 10; $cpt++){

    }

    function helloWorld()
    {
        echo "Bonjour tout le monde";
    }
    helloWorld();





    function helloYou(&$toto)
    {
        //global $myFirstname;
        $toto = "Toto";
    }
    //variable globale : accessible partout
    $myFirstname = "Yves";
    helloYou($myFirstname);

    echo $myFirstname; //Toto




    $myFirstname = " Yv";

    function cleanAndCheckFirstname(&$firstname)
    {
        $firstname = trim($firstname);
        if(strlen($firstname)>=2 && strlen($firstname)<= 30){
            return true;
        }
        return false;
    }

    if(cleanAndCheckFirstname($myFirstname)){
        //Insertion en BDD
        echo "Insertion en BDD";
    }else{
        //Message d'erreur sur le formulaire
        echo "Erreur";
    }

?>
