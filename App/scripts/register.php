<?php
require "database.php";

class register extends database
{
    public $username;
    public $email;
    public $password;
    public $repeatpassword;

    public function emptydetails($username, $email, $password, $repeatpassword)
    {

        if (empty($username) || empty($email) || empty($password) || empty($repeatpassword)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    public function passwordCheck($password, $repeatpassword)
    {
        if ($password !== $repeatpassword) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    public function userExist($username, $email)
    {
        $poo = new database();
        $pdo = $poo->connectDatabase();
        $query = "SELECT * FROM `register` WHERE username=:username OR email=:email";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(":username", $username);
        $stmt->bindparam(":email", $email);
        $stmt->execute();
        $reslt = $stmt->fetch();
        if (empty($reslt)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
        print_r($reslt);
    }
    function createUser($username, $email, $password)
    {

        $passcode = password_hash($password, PASSWORD_DEFAULT);
        $poo = new database();
        $pdo = $poo->connectDatabase();
        $query = "INSERT INTO  `register` SET username=:username, email=:email, password=:password";
        $stmt = $pdo->prepare($query);
        $stmt->bindparam(":username", $username);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":password", $passcode);
        if ($stmt->execute()) {
            header("./login");
        } else {
            print_r($stmt->errorInfo());
        }
    }
}
