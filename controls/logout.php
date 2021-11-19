<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['logged_in']);
header("Location: ../view/index.html.php");
