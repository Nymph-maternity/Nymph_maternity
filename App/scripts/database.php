<?php

class database
{

    public function connectDatabase()
    {
        $username = "root";
        $password = "";
        $dsn = "mysql:host=localhost;dbname=maternity";
        try {
            $pdo = new \PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $pdo;
    }
}
