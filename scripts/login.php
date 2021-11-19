<?php
require("database.php");
class login extends database
{


    public function loginUser($password, $email)
    {
        $poo = new database;
        $pdo = $poo->connectDatabase();
        $query = "SELECT `password` FROM `register` WHERE email = :email";
        $stmt =  $pdo->prepare($query);
        $stmt->bindparam(":email", $email);
        $stmt->execute();
        $pass = $stmt->fetch();
        $hash = $pass['password'];
        if (password_verify($password, $hash)) {
            echo 'Password is valid!';
            header('Location: ../view/dashboard.html.php');
        } else {
            echo 'Invalid password.';
        }
    }
    public function getDetails($email)
    {
        $poo = new database();
        $pdo = $poo->connectDatabase();
        $query = "SELECT * FROM `register` WHERE  email=:email";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(":email", $email);
        $stmt->execute();
        $reslt = $stmt->fetchAll();
        return $reslt;
    }
}
