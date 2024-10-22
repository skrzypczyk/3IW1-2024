<?php
class UserValidator{

    public Object $user;

    private String $pwdConfirm;

    private array $errors = [];

    public function __construct(Object $user, String $pwdConfirm)
    {
        $this->user = $user;
        $this->pwdConfirm = $pwdConfirm;

        if( strlen($user->getFirstname())<2){
            $this->errors[] = "Le prénom doit faire plus de 2 caractères";
        }
        if( strlen($user->getLastname())<2){
            $this->errors[] = "Le nom doit faire plus de 2 caractères";
        }
        if( !filter_var($user->getEmail(),FILTER_VALIDATE_EMAIL)){
            $this->errors[] = "L'email est invalide";
        }
        if(strlen($this->pwdConfirm)<8 ||
            !preg_match("/[a-z]/", $this->pwdConfirm) ||
            !preg_match("/[0-9]/", $this->pwdConfirm) ||
            !preg_match("/[A-Z]/", $this->pwdConfirm)
        ){
            $this->errors[] = "Le mot de passe doit faire au min 8 caractère avec min maj chiffres";
        }else if( !password_verify($this->pwdConfirm,$user->getPwd())){
            $this->errors[] = "Le mot de passe de confirmation ne correspond pas";
        }




    }



    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }


}