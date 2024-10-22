<?php

class Sqlite{

    protected $pdoSqlite;
    public function __construct()
    {
        $this->pdoSqlite = new PDO("sqlite:db.sq3");
        $request = $this->pdoSqlite->prepare("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, firstname VARCHAR(32), lastname VARCHAR(60), email VARCHAR(255), pwd VARCHAR(255))");
        $request->execute();
    }

    public function insertUser(Object $user){
        $request = $this->pdoSqlite->prepare("INSERT INTO users (firstname, lastname, email, pwd) VALUES (:firstname,:lastname,:email,:pwd)");
        $request->execute([
            "firstname"=>$user->getFirstname(),
            "lastname"=>$user->getLastname(),
            "email"=>$user->getEmail(),
            "pwd"=>$user->getPwd(),
        ]);
    }

    public function getUsers(): array
    {
        $request = $this->pdoSqlite->prepare("SELECT * FROM users");
        $request->execute();
        return $request->fetchAll();
    }

    public function getUserByEmail(String $email): array
    {
        $request = $this->pdoSqlite->prepare("SELECT * FROM users WHERE email = :email");
        $request->execute(["email"=>$email]);
        return $request->fetch();
    }

}








