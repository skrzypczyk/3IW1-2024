<?php
session_start();
require 'Sqlite.class.php';


    $errors = [];
    //Le code pour se connecter
    if(count($_POST)==2 && !empty($_POST["email"]) && !empty($_POST["password"])  )
    {
        $email = strtolower(trim($_POST["email"]));
        $pwd = $_POST["password"];

        $pdo = new Sqlite();
        $user = $pdo->getUserByEmail($email);

        if(empty($user) || !password_verify($pwd, $user["pwd"])){
            $errors[] = "Identifiants incorrects";
        }else{
            $_SESSION["log"] = true;
            $_SESSION["firstname"] = $user["firstname"];
            header('Location: index.php');
        }

    }

?>

<h1>Se connecter</h1>

<?php include "./header.php"; ?>
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

<form action="login.php" method="POST">
    <input type="email" required name="email" placeholder="Votre email"><br>
    <input type="password" required name="password" placeholder="Votre mot de passe"><br>
    <input type="submit" value="Se connecter">
</form>