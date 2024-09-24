<?php
    //Le code pour se connecter
    print_r($_POST);
    $email = $_POST["email"];
    $pwd = $_POST["password"];

?>

<h1>Se connecter</h1>

<ul>
    <li>Inscription</li>
    <li>Connexion</li>
</ul>

<ul>
    <li>Déconnexion</li>
</ul>

<div style="background-color: red">
    <ul>
        <li>Les erreurs</li>
        <li>Les erreurs</li>
    </ul>
</div>

<form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Votre email"><br>
    <input type="password" name="password" placeholder="Votre mot de passe"><br>
    <input type="submit" value="Se connecter">
</form>