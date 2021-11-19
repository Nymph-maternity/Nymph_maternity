<?php
session_start();
require("../scripts/login.php");


$login = new login;
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($login->loginUser($password, $email)) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['logged_in'] = true;
    } else {
        $message = "No user with the provided email";
    }
}
