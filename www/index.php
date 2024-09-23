<?php
    // Bonne structure / Bonne orga => Travail collaboratif
    // La factorisation (éviter la redondance de code)
    // Performant NON
    // Cadre contraignant
    // Convention de nommage : PascalCase

/*
class House{
    //Proprietes ou attributs ???
    private Int $roof = 1;
    private Int $fundation = 1;
    private Int $door = 1;
    private Int $window = 1;
    private Int $wall = 4;
    public String $color = "Grey";
    private Int $stage = 0;
    private Int $stairs = 0;

    public function addStage(Int $stage = 1): void
    {
        for($cpt=1; $cpt<=$stage; $cpt++){
            $this->stage++;
            $this->wall+=4;
            $this->window++;
            $this->stairs++;
        }
    }

}

echo "<pre>";
//Objet = instance d'une classe
$myRedHouse = new House();
$myRedHouse->color = "Red";
$myRedHouse->addStage(2);
print_r($myRedHouse);

$myGreenHouse = new House();
$myGreenHouse->color = "Green";
print_r($myGreenHouse);


interface IntVehicule{
    public function brake();
    public function stop();

}

abstract class Vehicle implements IntVehicule {
    protected int $speed = 0;
    //abstract public function brake();
    public function acceleration():void
    {
        $this->speed+=$this->accelerate;
    }

}
class Moto extends Vehicle {
    protected int $accelerate = 4;
    private int $wheel = 2;
    public function acceleration():void
    {
        $this->speed += ($this->accelerate*1.5) ;
    }
    public function brake()
    {

    }
}
class Car extends Vehicle {
    protected int $accelerate = 2;
    private int $wheel = 4;
    public function brake()
    {

    }
}

echo "<pre>";
$myMoto = new Moto();
$myMoto->acceleration();
print_r($myMoto);

$myCar = new Car();
$myCar->acceleration();
print_r($myCar);

*/


class User
{
    private String $email;
    private String $pwd;
    private String $firstname;
    private String $lastname;

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $email = trim(strtolower($email));
        $this->email = $email;
    }

    /**
     * @return String
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param String $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }

    /**
     * @return String
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param String $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = ucwords(strtolower(trim($firstname)));
    }

    /**
     * @return String
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param String $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = strtoupper(trim($lastname));
    }



}

echo "<pre>";

$user = new User();
$user->setEmail("   Y.FDSFDSFDS@fdsfds.FR");
$user->setPwd("Test1234");
$user->setFirstname("YVES");
$user->setLastname("SkrzYPczYK");

print_r($user);






