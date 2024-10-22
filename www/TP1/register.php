<?php

require "User.class.php";
require "UserValidator.class.php";
require "Sqlite.class.php";
//Le code pour s'inscrire

/*
 * Array
(
    [firstname] => Yves
    [lastname] => Skrzypczyk
    [email] => y.skrzypczyk@gmail.fr
    [password] => TYest1234
    [passwordConfirm] => Test1234
)
 */

$errors = [];


if(count($_POST) == 5 && !empty($_POST["firstname"])  && !empty($_POST["lastname"])
    && !empty($_POST["email"])  && !empty($_POST["password"])
    && !empty($_POST["passwordConfirm"])){

    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setFirstname($_POST['firstname']);
    $user->setLastname($_POST['lastname']);
    $user->setPwd($_POST['password']);


    $validator = new UserValidator($user, $_POST["passwordConfirm"]);
    $errors =$validator->getErrors();
    if(empty($errors)){
        echo "Insertion en BDD";
        $pdoSQLITE = new Sqlite();
        $pdoSQLITE->insertUser($user);
    }

}


?>

<h1>S'inscrire</h1>

<?php include "header.php";?>

<?php

if(!empty($errors)){
    echo '<div style="background-color: red">';
    foreach ($errors as $error)
    {
        echo '<li>'.$error.'</li>';
    }
    echo '</div>';
}

?>


<form method="post">
    <input type="text" name="firstname" required placeholder="Votre prénom"><br>
    <input type="text" name="lastname" required placeholder="Votre nom"><br>
    <input type="email" name="email" required placeholder="Votre email"><br>
    <input type="password" name="password" required placeholder="Votre mot de passe"><br>
    <input type="password" name="passwordConfirm" required placeholder="Confirmation"><br>
    <input type="submit" required value="S'inscrire">
</form>

<pre>
<?php
$pdoSQLITE = new Sqlite();
$results = $pdoSQLITE->getUsers();
print_r($results);
?>
</pre>
